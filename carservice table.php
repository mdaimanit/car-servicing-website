<?php
$servername = "localhost";
$username = "noor";
$password = "1234";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE carservice (
firstname varchar (20),
lastname varchar (15),
email varchar (15),
services varchar (15),
primary key (email))";

if ($conn->query($sql) === TRUE) {
    echo "Table carservice created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
