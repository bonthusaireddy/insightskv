<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/imp/conn.php');
include('includes/imp/islogin.php');
?>

<?php
include('includes/imp/conn.php');

if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $vendor_id = $_REQUEST['vendor_id'];
    $sql = "SELECT *
    FROM vendor
    INNER JOIN project_vendors ON vendor.id = project_vendors.vendor_id WHERE project_vendors.project_id = '$id' and project_vendors.vendor_id = '$vendor_id'";
    $query_run = mysqli_query($conn, $sql);

    foreach($query_run as $row)
    {
        ?>

<h1 class="heading_company">Project Vendor Details</h1>
<form action="database.php" method="post">
    <input type="hidden" name="project_id" value="<?php echo $id; ?>">
    <input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
    <p style="margin-left: 174px;">
        <label for="firstName">Project Vendor :</label>
        <!-- <input type="text" name="company_name" id="company_name" style="    margin-left: 16px;"> -->
        <select name="" style=" width: 189px;height: 34px;    margin-left: 49px;">
          <option value="parent_project" name="parent_project"><?php echo $row['vendor_name'] ?></option>
            </select>


        <!-- <label for="lastName" style="    margin-left: 47px;">Vendor Contact :</label> -->
        <!-- <input type="text" name="parent_company_name" id="parent_company" style="    margin-left: 17px;"> -->
        <!-- <select name="vendor_contact" style=" width: 189px;height: 34px;    margin-left: 59px;">
          <option value="parent_project" name="parent_project"><?php echo $row['parent_project'] ?></option>
             </select> -->
    </p>

   
    <hr class="solid">
    <h1 class="heading_company">Cost & Completes</h1>
    <p class="textbox_addcompany">
        <label for="Address">Cost Per Complete :</label>&nbsp;&nbsp;
        <input type="text" name="cost_per_complete" value="<?php echo $row['cost_per_complete'] ?>" id="Address_one" style="margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 23px;">Req. Completes :</label>&nbsp;&nbsp;
        <input type="text" name="req_complete" id="Address_two" value="<?php echo $row['req_complete'] ?>" style=" margin-left: 49px;">
       
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Max. Completes :</label>&nbsp;&nbsp;
        <input type="text" name="max_complete" id="Address_three" value="<?php echo $row['max_complete'] ?>">
        
    </p>
    </hr>
    <hr class="solid">
    <h1 class="heading_company">  Surveys Redirect Details</h1>
  
    <p class="textbox_addcompany">
        <label for="Address" style="position: relative; bottom: 49px;">Max. Redirects:</label>
         <input style="margin-left: 36px; bottom: 49px; position: relative;" type="text" name="max_redirects" id="Address_three" value="<?php echo $row['max_redirects'] ?>">

        <label for="Address" style=" margin-left: 119px;position: relative;bottom: 35px;">Completion link :</label>
        <textarea name="completion_link" id="completion_link" cols="30" rows="3"><?php echo $row['completion_link'] ?></textarea>
      
    </p>
    <p class="textbox_addcompany1">
        <label for="Address" style="bottom: 35px; position: relative;">Disqualify link :</label>
        <textarea name="disqualify_link" id="disqualify_link" cols="30" rows="3"><?php echo $row['disqualify_link'] ?></textarea>

        <label for="Address" style=" bottom: 35px; position: relative;  margin-left: 38px;">Quotafull link:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <textarea name="quotafull_link" id="quotafull_link" cols="30" rows="3"><?php echo $row['quotafull_link'] ?></textarea>
    </p>

    
    <hr class="solid">
    <h1 class="heading_company">Vendor Project Status</h1>
        <label for="completion_link" style="margin-left: 187px;">Vendor Project Status :</label>
        <select name="status" style=" width: 189px;height: 34px;    margin-left: 8px;">
            <option value="<?php echo $row['project_status'] ?>" name="status"><?php echo $row['project_status'] ?></option>
            <option value="Testing" name="status">Testing</option>
            <option value="Running" name="status">Running</option>
            <option value="Hold" name="status">Hold</option>
            <option value="Complete" name="status">Complete</option>
            <option value="Closed" name="status">Closed</option>
         </select>
       
        <label for="notes" style="margin-left: 36px;">Notes :</label>
        <input type="text" name="notes" value="<?php echo $row['notes'] ?>" >
       
        <a href="editproject.php" class="btn btn-danger" style="margin-left: 520px;"> CANCEL </a>
    <input type="submit" name="edit_add_project_vendors" value="Submit" class="btn btn-primary" style="    margin-bottom: 65px; margin-top: 64px;width: 100px;">
</form>

<?php
   } 
  }
        ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>