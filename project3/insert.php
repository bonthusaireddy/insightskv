<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		include('includes/imp/conn.php');
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// $conn = mysqli_connect("localhost", "root", "", "company");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id=$_REQUEST['id'];
		$company_name = $_REQUEST['company_name'];
		$parent_company_name = $_REQUEST['parent_company_name'];
		$display_name = $_REQUEST['display_name'];
		$company_type = $_REQUEST['company_type'];
		$address_one = $_REQUEST['address_one'];
		$address_two = $_REQUEST['address_two'];
		$address_three = $_REQUEST['address_three'];
		$country = $_REQUEST['country'];
		$state = $_REQUEST['state'];
		$city = $_REQUEST['city'];
		$zip= $_REQUEST['zip'];
		$email_p = $_REQUEST['email_p'];
		$email_s = $_REQUEST['email_s'];
		$phone_p = $_REQUEST['phone_p'];
		$phone_s = $_REQUEST['phone_s'];
		$completionlink = $_REQUEST['completionlink'];
		$disqualifylink = $_REQUEST['disqualifylink'];
		$quotafulllink = $_REQUEST['quotafulllink'];


		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO company_mangement VALUES ('$id','$company_name','$parent_company_name','$display_name','$company_type','$address_one','$address_two','$address_three','$country','$state','$city','$zip','$email_p','$email_s','$phone_p','$phone_s','$completionlink','$disqualifylink','$quotafulllink')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

                header('location: addcompany.php');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
