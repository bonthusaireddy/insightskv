<?php
$servername = "localhost";
$username = "root"; // default username for localhost is root
$password = ""; // default password for localhost is empty
$dbname = "company"; // database name
include('includes/imp/conn.php');
$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 

