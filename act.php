<?php
// reciving the from another web page
// save the get value to a new variable to check it
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latlng";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$recive_get_method = $_GET["act"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO numbers (lat, lng)
    VALUES (2, 3)";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
