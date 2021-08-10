<?php 
include ('includes/imp/conn.php');


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
  }
  echo 'addcompany <br>';
  header('refresh:1; url=dashboard.php');
}

if(isset($_POST['addproject']) ) {

  if(isset($_POST['parent_project']) && $_POST['parent_project'] == '0'){
    // $id
    $project_name = $_REQUEST['project_name'];
    $project_friendly_name = $_REQUEST['project_friendly_name'];
    $sql = "INSERT INTO parent_projects(project_name, project_friendly_name) VALUES ('$project_name','$project_friendly_name')";
    if(mysqli_query($conn, $sql)){} 
    else{
			echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		}
  }
    $project_name = $_REQUEST['project_name'];
    $project_friendly_name = $_REQUEST['project_friendly_name'];
    $client_name = $_REQUEST['client_name'];
    $parent_project = $_REQUEST['parent_project'];
    $project_manager = $_REQUEST['project_manager'];
    $country = $_REQUEST['country'];
    $client_contact = $_REQUEST['client_contact'];
    $sales_person = $_REQUEST['sales_person'];
    $req_complete = $_REQUEST['req_complete'];
    $cpc = $_REQUEST['cpc'];
    $ir = $_REQUEST['ir'];
    $survey_link = $_REQUEST['survey_link'];
    $status = $_REQUEST['status'];
    $max_complete = $_REQUEST['max_complete'];
    $loi = $_REQUEST['loi'];
    $note = '0'; //$_REQUEST['note'];
    $points_to_award = '1';
    $id = get_id_of_project($conn);
    $completion_link = 'http://insightskv.ml/endcapture.php?cada='.$id.'&st=111';
    $disqualify_link = 'http://insightskv.ml/endcapture.php?cada='.$id.'&st=222';
    $quotafull_link= 'http://insightskv.ml/endcapture.php?cada='.$id.'&st=333';
    $sql = "INSERT INTO projects(project_name, project_friendly_name, client_name, parent_project, project_manager, country, client_contact, sales_person, req_complete, cpc, ir, survey_link, status, max_complete,loi, note, points_to_award, completion_link, disqualify_link, quotafull_link) VALUES ('$project_name', '$project_friendly_name', '$client_name', '$parent_project', '$project_manager', '$country', '$client_contact', '$sales_person', '$req_complete', '$cpc', '$ir', '$survey_link', '$status', '$max_complete', '$loi', '$note', '$points_to_award', '$completion_link','$disqualify_link','$quotafull_link')";
    if(mysqli_query($conn, $sql)){
      echo 'addproject <br>';
      header('refresh:1; url = manageproject.php');
    } 
    else{
			echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		}    
}
    function get_id_of_project($conn){
      $sql = "SELECT id FROM projects ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        return $id + 1;
      }
    }

if(isset($_POST['add_project_vendors'])){
  // $id = 
  $project_id = $_REQUEST['project_id'];
  $vendor_id = $_REQUEST['vendor_id'];
  $redirects = 0;
  $completed = 0;
  $disqualified = 0;
  $qf =  0;
  $ir = 0;
  $cpc = 0;
  $cost_per_complete = $_REQUEST['cost_per_complete'];
  $req_complete = $_REQUEST['req_complete'];
  $max_complete = $_REQUEST['max_complete'];
  $max_redirects = $_REQUEST['max_redirects'];
  $completion_link = $_REQUEST['completion_link'];
  $disqualify_link = $_REQUEST['disqualify_link'];
  $quotafull_link = $_REQUEST['quotafull_link'];
  $project_status = $_REQUEST['status'];
  $notes = $_REQUEST['notes'];
  $survey_link = 'http://insightskv.ml/capture.php?gid='.$project_id.'&vid='.$vendor_id.'&pid=';
  // $timestamp = $_REQUEST[''];
  
  $sql = "INSERT INTO project_vendors(project_id, vendor_id, redirects, completed, disqualified, qf, ir, cpc,cost_per_complete, req_complete, max_complete, max_redirects, completion_link, disqualify_link, quotafull_link, project_status, notes, survey_link) VALUES ('$project_id','$vendor_id','$redirects','$completed','$disqualified','$qf','$ir','$cpc','$cost_per_complete','$req_complete','$max_complete','$max_redirects','$completion_link','$disqualify_link','$quotafull_link','$project_status','$notes','$survey_link')";
   if(mysqli_query($conn, $sql)){
        $_POST = array();
        echo 'add_project_vendors <br>';
        header("location: projectview.php?id=$project_id");
		 } else{
			  echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		 }

}

if(isset($_POST['clientedit'])){
  $id = $_REQUEST['id'];
  $client_name = $_REQUEST['client_name'];
  $parent_client_name = $_REQUEST['parent_client_name'];
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
  $sql = "update client set client_name='$client_name', parent_client_name='$parent_client_name', display_name = '$display_name', address_one='$address_one', address_two='$address_two', address_three='$address_three', country='$country', state='$state', city='$city', zip='$zip', email_p='$email_p', email_s='$email_s', phone_p='$phone_p', phone_s='$phone_s' where id='$id'";
  
  if(mysqli_query($conn, $sql)){
    $_POST = array();
    echo 'clientedit';
    header("refresh:1; url=clientedit.php?id=$id");
		} else{
			echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		}
  
}

if(isset($_POST['vendoredit'])){
    $id = $_POST['id'];
   $vendor_name = $_REQUEST['vendor_name'];
   $parent_vendor_name = $_REQUEST['parent_vendor_name'];
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
  
  $sql = "update vendor set vendor_name='$vendor_name', parent_vendor_name='$parent_vendor_name', display_name = '$display_name', address_one='$address_one', address_two='$address_two', address_three='$address_three', country='$country', state='$state', city='$city', zip='$zip', email_p='$email_p', email_s='$email_s', phone_p='$phone_p', phone_s='$phone_s', completion_link='$completion_link', disqualify_link='$disqualify_link', quotafull_link='$quotafull_link' where id='$id'";
  
  if(mysqli_query($conn, $sql)){
    $_POST = array();
    header("refresh:1; url=vendoredit.php?id=$id");
    echo 'vendoredit <br>';
		} else{
			echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		}
}

if(isset($_POST['edit_add_project_vendors'])){
  $project_id = $_REQUEST['project_id'];
  $vendor_id = $_REQUEST['vendor_id'];

  $cost_per_complete = $_REQUEST['cost_per_complete'];
  $req_complete = $_REQUEST['req_complete'];
  $max_complete = $_REQUEST['max_complete'];
  $max_redirects = $_REQUEST['max_redirects'];
  $completion_link = $_REQUEST['completion_link'];
  $disqualify_link = $_REQUEST['disqualify_link'];
  $quotafull_link = $_REQUEST['quotafull_link'];
  $project_status = $_REQUEST['status'];
  $notes = $_REQUEST['notes'];

  $sql = "update project_vendors set cost_per_complete='$cost_per_complete', req_complete='$req_complete', max_complete='$max_complete',max_redirects='$max_redirects',completion_link='$completion_link', disqualify_link='$disqualify_link', quotafull_link='$quotafull_link', project_status='$project_status', notes='$notes' where project_id='$project_id' and vendor_id='$vendor_id'";
  
  if(mysqli_query($conn, $sql)){
    $_POST = array();
    echo 'edit_add_project_vendors <br>';
    header("refresh:1; url=addvendoredit.php?id=$project_id&vendor_id=$vendor_id");
		} else{
			echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		}
}

if(isset($_POST['editprojectview'])){
    $id = $_REQUEST['id'];
    $project_name = $_REQUEST['project_name'];
    $project_friendly_name = $_REQUEST['project_friendly_name'];
    $project_manager = $_REQUEST['project_manager'];
    $country = $_REQUEST['country'];
    $client_contact = $_REQUEST['client_contact'];
    $sales_person = $_REQUEST['sales_person'];
    $req_complete = $_REQUEST['req_complete'];
    $cpc = $_REQUEST['cpc'];
    $ir = $_REQUEST['ir'];
    $survey_link = $_REQUEST['survey_link'];
    $status = $_REQUEST['status'];
    $max_complete = $_REQUEST['max_complete'];
    $loi = $_REQUEST['loi'];
    $note = $_REQUEST['note'];
    $points_to_award = $_REQUEST['points_to_award'];
    $sql = "update projects set project_name='$project_name', project_friendly_name='$project_friendly_name', client_contact='$client_contact', project_manager='$project_manager', sales_person='$sales_person', country = '$country', req_complete = '$req_complete',cpc = '$cpc',loi = '$loi',ir = '$ir',points_to_award = '$points_to_award',note = '$note',max_complete = '$max_complete',survey_link='$survey_link',status = '$status' where id='$id'";
    if(mysqli_query($conn, $sql)){
     $_POST = array();
     echo 'eeditprojectview <br>';
     header("refresh:1; url=projectview.php?id=$id");
		  }else{
			  echo "ERROR: Hush! Sorry $sql. " .mysqli_error($conn);
		  }
}
echo 'Last';
?>