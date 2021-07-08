<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$fname = "";
$lname = "";
$country = "";
$state = "";
$city = "";
$phone = "";
$errors = array(); 

// connect to the database
include('conn.php');
$db = mysqli_connect($servername, $username, $password, $dbname);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  // $zone = mysqli_real_escape_string($db, $_POST['zone']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']); 
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($fname)) { array_push($errors, "firstname is required"); }
  if (empty($lname)) { array_push($errors, "lastname is required"); }
  if (empty($country)) { array_push($errors, "country is required"); }
  if (empty($state)) { array_push($errors, "state is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM panel_users WHERE username='$username' OR email='$email' OR  phone='$phone'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['phone'] === $phone) {
      array_push($errors, "Phone Number already register");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username,fname,lname,country, state,city, phone,email, password) 
  			  VALUES('$username','$fname','$lname','$country','$state','$city','$phone','$email','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION["loggedIn"] = true;
  	header('location: dashboard.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM panel_users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['loggedIn'] = true;
          header('location: dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }


?>
