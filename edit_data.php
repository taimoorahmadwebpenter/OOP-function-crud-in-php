<?php

include 'database_con.php';
$tbl_name = 'data'; // Replace with your table name

// Create an instance of Queries
$obj = new Queries();

// Fetch current record details based on ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Fetch ID from query string
} else {
    die("ID is missing.");
}

// Fetch record details
$record = $obj->getdata($tbl_name);
$currentRecord = array_filter($record, function($item) use ($id) {
    return $item['id'] == $id;
});
$currentRecord = array_shift($currentRecord);

if (!$currentRecord) {
    die("Record not found.");
}




// Create an instance of Queries
// $obj = new Queries();

// Check if form is submitted
if (isset($_POST['update'])) {
    // Retrieve and sanitize form data
    $id = intval($_POST['id']); // Assuming you have an ID field in your form
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    
    // You may want to add additional validation and sanitization here

    // Example data to update
    $data = [
        'name' => $name,
        'email' => $email,
        'pass' => $pass
        // Add more columns and values as needed
    ];

    // Update data
    $message = $obj->updateData($tbl_name, $data, $id);
    echo $message;
}
?>
<?php include 'header.php';?>
<div class="container mt-5">
    <form action="#" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($currentRecord['id']); ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="UserName">UserName</label>
                <input type="text" class="form-control" placeholder="UserName" name="name" value="<?php echo htmlspecialchars($currentRecord['name']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo htmlspecialchars($currentRecord['email']); ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="pass" value="<?php echo htmlspecialchars($currentRecord['pass']); ?>">
            </div>
        </div>
        <button type="submit" name="update" class="btn btn-outline-primary">Update</button>
    </form>
</div>
<?php include 'footer.php';?>