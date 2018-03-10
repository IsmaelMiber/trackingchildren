<?php
// reciving the from another web page
// save the get value to a new variable to check it
$servername = "localhost";
$username = "ismaelmiber";
$password = "932170";
$dbname = "ismael";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$lat = $_GET["lat"];
$lng = $_GET["lng"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO numbers (lat, lng)
    VALUES ($lat, $lng)";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
