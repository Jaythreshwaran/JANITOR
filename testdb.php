<?php
// Include your db.php file to use the connection details
include('db.php');

// Test the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully to the database!";
?>
