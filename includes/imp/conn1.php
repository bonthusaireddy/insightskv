<?php
$servername='localhost';
$username = "u265070452_insightskv";
$password = "Hkb+g0F+v";
$dbname = "u265070452_panel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 