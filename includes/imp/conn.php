<?php
$servername = "localhost";
$username = "u265070452_insightskv"; // default username for localhost is root
$password = "Hkb+g0F+v"; // default password for localhost is empty
$dbname = "u265070452_panel"; // database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 