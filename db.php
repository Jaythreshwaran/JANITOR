<?php
$servername = "localhost";
$username = "jay";
$password = "Saraswathy123";  // <-- update here
$dbname = "janitor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
