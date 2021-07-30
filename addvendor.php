<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/imp/conn.php');
?>

<?php 

$project_id = $_GET['project_id'];

$sql = "select id, vendor_name from vendor";
$result = mysqli_query($conn, $sql);
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
        <select name="vendor_id" style=" width: 189px;height: 34px;    margin-left: 49px;"  onchange="recp(this.value);">
          <option value="parent_project" name="parent_project">Select Vendor</option>
            <?php 
            while($row = mysqli_fetch_row($result)) { ?>
                <option value="<?php echo $row[0]; ?>" name="parent_project"><?php echo $row[1]; ?></option>
            <?php 
            }?>  
            </select>


        <label for="lastName" style="    margin-left: 47px;">Vendor Contact :</label>
        <!-- <input type="text" name="parent_company_name" id="parent_company" style="    margin-left: 17px;"> -->
        <select name="vendor_contact" style=" width: 189px;height: 34px;    margin-left: 59px;">
          <option value="parent_project" name="parent_project">Select Contact</option>
             <option value="demo0" name="parent_project">default</option>
            
            </select>
    </p>

   
    <hr class="solid">
    <h1 class="heading_company">Cost & Completes</h1>
    <p class="textbox_addcompany">
        <label for="Address">Cost Per Complete :</label>&nbsp;&nbsp;
        <input type="text" name="cost_per_complete" id="Address_one" style="    margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 23px;">Req. Completes :</label>&nbsp;&nbsp;
        <input type="text" name="req_complete" id="Address_two" style=" margin-left: 49px;">
       
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Max. Completes :</label>&nbsp;&nbsp;
        <input type="text" name="max_complete" id="Address_three" style="margin-left: 35px;">
        
    </p>
    </hr>
    <hr class="solid">
    <h1 class="heading_company">  Surveys Redirect Details</h1>
  
    <p class="textbox_addcompany">
        <label for="Address">Max. Redirects:</label>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="max_redirects" id="Address_three" style="    margin-left: 36px;">
        <label for="Address" style="margin-left: 41px;">Completion link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="completion_link" id="Completion_link" style="height: 81px;margin-left: 44px;">
      
    </p>
    <p class="textbox_addcompany1">
        <label for="Address">Disqualify link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="disqualify_link" id="disqualify_link" style="margin-left: 9px;height: 81px;">
        <label for="Address" style="    margin-left: 38px;">Quotafull link:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="quotafull_link" id="quotafull_link" style="    margin-left: 37px;height: 81px;">
    </p>

    
    <hr class="solid">
    <h1 class="heading_company">Vendor Project Status</h1>
        <label for="completion_link" style="margin-left: 187px;">Vendor Project Status :</label>
        <select name="status" style=" width: 189px;height: 34px;    margin-left: 8px;">
          <option value="0" name="status">Select status</option>

             <option value="Testing" name="status">Testing</option>
                <option value="Running" name="status">Running</option>
                <option value="Hold" name="status">Hold</option>
                <option value="Complete" name="status">Complete</option>
                <option value="Closed" name="status">Closed</option>
            
            </select>
       
        <label for="notes" style="margin-left: 36px;">Notes :</label>
        <input type="text" name="notes" style="margin-left: 130px;">
       
        <a href="editproject.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" name="add_project_vendors" value="Submit" class="btn btn-primary" style="    margin-bottom: 65px; margin-top: 64px;width: 100px;">
</form>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>