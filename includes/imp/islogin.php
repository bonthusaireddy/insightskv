<?php 
session_start();
 //echo $_SESSION['username'];
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && isset($_SESSION['username'])) {
  //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
 // Do nothing
} else {
 header("Location: ./login.php");

}
 ?>