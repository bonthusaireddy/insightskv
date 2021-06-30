<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>

	  <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  	</div>

	  <div class="input-group" >
  	  <label>Country</label>
  	  <!-- <input type="text" name="country" value="<?php echo $country; ?>"> -->
		<select name="country" style="width: 398px; border-radius: 4px;height: 40px;" class="countries" id="countryId" value="<?php echo $country; ?>">>
    <option value="">Select Country</option>
</select>
  	</div>

	  <!-- <div class="input-group">
  	  <label>Zone</label>
  	  <input type="text" name="zone" value="<?php echo $zone; ?>">
  	</div> -->

	  <div class="input-group">
  	  <label>State</label>
  	  <!-- <input type="text" name="state" value="<?php echo $state; ?>"> -->
		
		<select name="state" class="states"  style="width: 398px; border-radius: 4px;height: 40px;" id="stateId" alue="<?php echo $state; ?>">>
    <option value="">Select State</option>
</select>
  	</div>

	  <div class="input-group">
  	  <label>City</label>
  	  <!-- <input type="text" name="city" value="<?php echo $city; ?>"> -->
		<select name="city" style="width: 398px; border-radius: 4px;height: 40px;" class="cities" value="<?php echo $city; ?>" id="cityId">
    <option value="">Select City</option>
</select>
</select>
  	</div>

	  <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already Register? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>