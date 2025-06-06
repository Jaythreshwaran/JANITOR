<?php
$host = "localhost"; // usually "localhost" for most hosts
$user = "jay";
$pass = "Saraswathy";
$dbname = "janitor";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
?>
