<?php
include 'database_con.php';
$tbl_name = 'data'; // Replace with your table name

// Create an instance of Queries
$obj = new Queries();

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    
    // You may want to add additional validation and sanitization here

    // Example data to insert
    $data = [
        'name' => $name,
        'email' => $email,
        'pass' => $pass
        // Add more columns and values as needed
    ];

    // // Insert data
     $insert_id = $obj->insertData($tbl_name, $data);
    // echo "Data inserted successfully. Last inserted ID: " . $insert_id;
}
?>
<?php include 'header.php';?>
    <div class="container mt-5">
        <form action="#" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="UserName">UserName</label>
                    <input type="text" class="form-control" placeholder="UserName" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="pass">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
    <?php include 'footer.php';?>