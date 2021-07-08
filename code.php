<?php
include('security.php');

// if(isset($_POST['registerbtn']))
// {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $cpassword = $_POST['confirmpassword'];

//     $email_query = "SELECT * FROM register WHERE email='$email' ";
//     $email_query_run = mysqli_query($connection, $email_query);
//     if(mysqli_num_rows($email_query_run) > 0)
//     {
//         $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
//         $_SESSION['status_code'] = "error";
//         header('Location: register.php');  
//     }
//     else
//     {
//         if($password === $cpassword)
//         {
//             $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
//             $query_run = mysqli_query($connection, $query);
            
//             if($query_run)
//             {
        
//                 $_SESSION['status'] = "Admin Profile Added";
//                 $_SESSION['status_code'] = "success";
//                 header('Location: register.php');
//             }
//             else 
//             {
//                 $_SESSION['status'] = "Admin Profile Not Added";
//                 $_SESSION['status_code'] = "error";
//                 header('Location: register.php');  
//             }
//         }
//         else 
//         {
//             $_SESSION['status'] = "Password and Confirm Password Does Not Match";
//             $_SESSION['status_code'] = "warning";
//             header('Location: register.php');  
//         }
//     }    

// }





if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $company_name =  $_POST['edit_company_name'];
    $parent_company_name =  $_POST['edit_parent_company_name'];
    $display_name = $_POST['edit_display_name'];
    $company_type =  $_POST['company_type'];
    $address_one =  $_POST['edit_address_one'];
    $address_two =  $_POST['edit_address_two'];
    $address_three = $_POST['edit_address_three'];
    $country =  $_POST['edit_country'];
    $state =  $_POST['edit_state'];
    $city =  $_POST['edit_city'];
    $zip= $_POST['edit_zip'];
    $email_p =  $_POST['edit_email_p'];
    $email_s= $_POST['edit_email_s'];
    $phone_p = $_POST['edit_phone_p'];
    $phone_s = $_POST['edit_phone_s'];
    $completionlink =  $_POST['edit_completionlink'];
    $disqualifylink =  $_POST['edit_disqualifylink'];
    $quotafulllink = $_POST['edit_quotafulllink'];

    $query = "UPDATE company_mangement SET  company_name='$company_name', parent_company_name='$parent_company_name', display_name='$display_name', company_type='$company_type', address_one='$address_one', address_two='$address_two', address_three='$address_three', country='$country',state='$state',city='$city',zip='$zip', email_p='$email_p', email_s='$email_s',phone_p='$phone_p',phone_s='$phone_s',completionlink='$completionlink',disqualifylink='$disqualifylink',quotafulllink='$quotafulllink'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: mangement.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: mangement.php'); 
    }
}


// updateproject

if(isset($_POST['updatebtnproject']))
{
    $ids = $_POST['edit_id'];
    $project_name =  $_POST['edit_project_name'];
    $client_name =  $_POST['edit_client_name'];
    $types= $_POST['type'];
    $parent_project =  $_POST['parent_project'];
    $client_name =  $_POST['edit_client_name'];
    $project_manager =  $_POST['project_manager'];
    $country = $_POST['country'];
    $client_contact =  $_POST['client_contact'];
    $sales_person =  $_POST['sales_person'];
    $req_compelet =  $_POST['req_compelet'];
    $cpc= $_POST['cpc'];
    $ir =  $_POST['ir'];
    $survey_link= $_POST['survey_link'];
    $status = $_POST['status'];
    $max_complete = $_POST['max_complete'];
    $loi =  $_POST['loi'];
    $note =  $_POST['note'];
   

    $query = "UPDATE users SET  project_name='$project_name', client_name='$client_name', type='$type', parent_project='$parent_project', client_name='$client_name', project_manager='$project_manager', country='$country', client_contact='$client_contact',sales_person='$sales_person',req_compelet='$req_compelet',cpc='$cpc', ir='$ir', survey_link='$survey_link',status='$status',loi='$loi',note='$note' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: manageproject.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        // header('Location: manageproject.php'); 
    }
}



if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: mangement.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: mangement.php'); 
    }    
}
?>

?>








