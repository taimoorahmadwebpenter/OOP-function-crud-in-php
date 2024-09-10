<?php 
include 'database_con.php'; // Ensure this includes the Database class
include 'Queries.php'; // Ensure this includes the Queries class

$tbl_name = 'data'; // Replace with your table name

// Create an instance of Queries
$obj = new Queries();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Fetch ID from query string

    // Delete data
    $message = $obj->deleteData($tbl_name, $id);
    echo $message;

    // Redirect or handle the result as needed
    header("Location: view-data.php"); // Redirect to another page
    exit();
} else {
    die("ID is missing.");
}
?>