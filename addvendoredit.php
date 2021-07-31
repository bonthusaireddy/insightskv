<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/imp/conn.php');
?>

<?php
include('includes/imp/conn.php');

// $connection = mysqli_connect("localhost","root","","company");
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

<script type="text/javascript">
function recp(id) {
  $.ajax({
    url:'data.php',
    method:'GET',
    data:{
    id:id,
    link_type:1
    },
    success:function(response){
        $('#Completion_link').val(response);
    }
    });
  $.ajax({
    url:'data.php',
    method:'GET',
    data:{
    id:id,
    link_type:2
    },
    success:function(response){
        $('#disqualify_link').val(response);
    }
    });
  $.ajax({
    url:'data.php',
    method:'GET',
    data:{
    id:id,
    link_type:3
    },
    success:function(response){
        $('#quotafull_link').val(response);
    }
    });
}
</script>


<h1 class="heading_company">Project Vendor Details</h1>
<form action="database.php" method="post">
    <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
    <p style="margin-left: 174px;">
        <label for="firstName">Project Vendor :</label>
        <!-- <input type="text" name="company_name" id="company_name" style="    margin-left: 16px;"> -->
        <select name="vendor_id" style=" width: 189px;height: 34px;    margin-left: 49px;">
          <option value="parent_project" name="parent_project"><?php echo $row['vendor_name'] ?></option>
            </select>


        <label for="lastName" style="    margin-left: 47px;">Vendor Contact :</label>
        <!-- <input type="text" name="parent_company_name" id="parent_company" style="    margin-left: 17px;"> -->
        <select name="vendor_contact" style=" width: 189px;height: 34px;    margin-left: 59px;">
          <option value="parent_project" name="parent_project"><?php echo $row['parent_project'] ?></option>
             </select>
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
        <input type="text" name="max_complete" id="Address_three" style="margin-left: 35px;" value="<?php echo $row['max_complete'] ?>">
        
    </p>
    </hr>
    <hr class="solid">
    <h1 class="heading_company">  Surveys Redirect Details</h1>
  
    <p class="textbox_addcompany">
        <label for="Address">Max. Redirects:</label>&nbsp;&nbsp;&nbsp;&nbsp;
         <input style="margin-left: 36px;" type="text" name="max_redirects" id="Address_three" value="<?php echo $row['max_redirects'] ?>">

        <label for="Address" style="margin-left: 41px;">Completion link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="completion_link" id="Completion_link" value="<?php echo $row['completion_link'] ?>" style="height: 81px;margin-left: 44px;">
      
    </p>
    <p class="textbox_addcompany1">
        <label for="Address">Disqualify link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="disqualify_link" id="disqualify_link" value="<?php echo $row['disqualify_link'] ?>" style="margin-left: 9px;height: 81px;">

        <label for="Address" style="    margin-left: 38px;">Quotafull link:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="quotafull_link" id="quotafull_link" value="<?php echo $row['quotafull_link'] ?>" style="margin-left: 37px;height: 81px;">
    </p>

    
    <hr class="solid">
    <h1 class="heading_company">Vendor Project Status</h1>
        <label for="completion_link" style="margin-left: 187px;">Vendor Project Status :</label>
        <select name="status" style=" width: 189px;height: 34px;    margin-left: 8px;">
          <option value="0" name="status"><?php echo $row['project_status'] ?></option>
         </select>
       
        <label for="notes" style="margin-left: 36px;">Notes :</label>
        <input type="text" name="notes" value="<?php echo $row['notes'] ?>" style="margin-left: 130px;">
       
        <a href="editproject.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" name="add_project_vendors" value="Submit" class="btn btn-primary" style="    margin-bottom: 65px; margin-top: 64px;width: 100px;">
</form>

<?php
   } 
  }
        ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>