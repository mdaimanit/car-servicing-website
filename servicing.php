<?php
$servername = "localhost";
$username = "noor";
$password = "1234";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$services = mysqli_real_escape_string($conn, $_REQUEST['services']);
 
// Attempt insert query execution
$sql = "INSERT INTO carservice (firstname, lastname, email, services) VALUES ('$firstname', '$lastname', '$email', '$services')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>