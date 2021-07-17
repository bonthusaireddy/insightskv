<?php 
include ('includes/imp/conn.php');
include ('includes/imp/islogin.php');

if(isset($_POST['addcompany']) && isset($_POST['company_type'])) {
 foreach($_POST['company_type'] as $value){
  if($value == 'Client'){
   $client_name = $_REQUEST['company_name'];
   $parent_client_name = $_REQUEST['parent_company_name'];
   $display_name = $_REQUEST['display_name'];
   $address_one = $_REQUEST['address_one'];
   $address_two = $_REQUEST['address_two'];
   $address_three = $_REQUEST['address_three'];
   $country = $_REQUEST['country'];
   $state = $_REQUEST['state'];
   $city = $_REQUEST['city'];
   $zip = $_REQUEST['zip'];
   $email_p = $_REQUEST['email_p'];
   $email_s = $_REQUEST['email_s'];
   $phone_p = $_REQUEST['phone_p'];
   $phone_s = $_REQUEST['phone_s'];
   $sql = "INSERT INTO client(client_name, parent_client_name, display_name, address_one, address_two, address_three, country, state, city, zip, email_p, email_s, phone_p, phone_s) VALUES ('$client_name','$parent_client_name','$display_name','$address_one','$address_two','$address_three','$country','$state','$city','$zip','$email_p','$email_s','$phone_p','$phone_s')";
   if(mysqli_query($conn, $sql)){

		 } else{
			 echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		 }
   
   echo 'client';
  }
  if($value == 'Vendor'){
   $vendor_name = $_REQUEST['company_name'];
   $parent_vendor_name = $_REQUEST['parent_company_name'];
   $display_name = $_REQUEST['display_name'];
   $address_one = $_REQUEST['address_one'];
   $address_two = $_REQUEST['address_two'];
   $address_three = $_REQUEST['address_three'];
   $country = $_REQUEST['country'];
   $state = $_REQUEST['state'];
   $city = $_REQUEST['city'];
   $zip = $_REQUEST['zip'];
   $email_p = $_REQUEST['email_p'];
   $email_s = $_REQUEST['email_s'];
   $phone_p = $_REQUEST['phone_p'];
   $phone_s = $_REQUEST['phone_s'];
   $completion_link = $_REQUEST['completion_link'];
   $disqualify_link = $_REQUEST['disqualify_link'];
   $quotafull_link = $_REQUEST['quotafull_link'];
   $sql = "INSERT INTO vendor(vendor_name, parent_vendor_name, display_name, address_one, address_two, address_three, country, state, city, zip, email_p, email_s, phone_p, phone_s, completion_link, disqualify_link, quotafull_link) VALUES ('$vendor_name','$parent_vendor_name','$display_name','$address_one','$address_two','$address_three','$country','$state','$city','$zip','$email_p','$email_s','$phone_p','$phone_s', '$completion_link', '$disqualify_link', '$quotafull_link')";
   if(mysqli_query($conn, $sql)){

		 } else{
			 echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		 }
   echo 'vendor';
  }
  header('location: management.php');
}
 echo 'out';
}
?>