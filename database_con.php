<?php
// Database connection class
class Database {
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = ''; // Change this to the correct password if set
    protected $database = 'gudda';
    protected $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}

// Class to handle queries
class Queries extends Database {
                                //get data function
    public function getdata($tbl_name) {
        $conn = $this->connect();
        $sql = "SELECT * FROM $tbl_name";

        $result = $conn->query($sql);
        if ($result) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            return "Error: " . $conn->error;
        }
    }
                           ///insert data function 
    public function insertData($tbl_name, $data) {
        $conn = $this->connect();
        
        // Prepare the SQL statement
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $tbl_name ($columns) VALUES ($placeholders)";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters
        $types = str_repeat('s', count($data)); // Assuming all values are strings. Adjust if needed.
        $values = array_values($data);
        $stmt->bind_param($types, ...$values);
        
        // Execute the statement
        if ($stmt->execute()) {
            header("location:view-data.php"); // Return the ID of the inserted row
        } else {
            header("location:edit_data.php") . $stmt->error;
        }
    }
    public function updateData($tbl_name, $data, $id) {
        //array('username' => 'xyz', 'status' => 'active')
        //array('book-slug' => 'Tarzan in Jungle', 'author' => 'James')

        $conn = $this->connect();
        
        // Prepare the SQL statement
        $setClause = implode(", ", array_map(function($key) {
            return "$key = ?";
        }, array_keys($data)));
        $sql = "UPDATE $tbl_name SET $setClause WHERE id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters
        $types = str_repeat('s', count($data)) . 'i'; // Assuming all values are strings and ID is an integer
        $values = array_values($data);
        $values[] = $id;
        $stmt->bind_param($types, ...$values);
        
        // Execute the statement
        if ($stmt->execute()) {
            header("location:view-data.php");
        } else {
            return "Error: " . $stmt->error;
        }
    }


    public function deleteData($tbl_name, $id) {
        $conn = $this->connect();
        
        // Prepare the SQL statement
        $sql = "DELETE FROM $tbl_name WHERE id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param('i', $id); // Assuming ID is an integer
        
        // Execute the statement
        if ($stmt->execute()) {
            return "Record deleted successfully.";
        } else {
            return "Error: " . $stmt->error;
        }
    }
}

?>
