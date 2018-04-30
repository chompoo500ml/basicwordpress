<?php
$servername = "172.20.0.105";
$username = "chompoo";
$password = "chompoo";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";