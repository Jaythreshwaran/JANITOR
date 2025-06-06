<?php
$servername = "localhost";       // usually 'localhost' on hosting
$username = "jay";               // your database username
$password = "Saraswathy123";     // your database password
$dbname = "janitorm_janitor";   // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the janitorm_janitor database!";
?>
