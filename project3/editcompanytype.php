<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


?>


<?php
include('includes/imp/conn.php');
$connection = mysqli_connect($servername, $username, $password, $dbname);

// $connection = mysqli_connect("localhost","root","","company");
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM company_mangement WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

<h3>Editing Company Type</h3>

<form action="code.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
<p style="margin-left: 174px;">
        <label for="firstName">Company Name</label>
        <input type="text" name="edit_company_name" value="<?php echo $row['company_name'] ?>" id="company_name"
            style="    margin-left: 16px;">
            

            <label for="company" style="margin-left: 46px;    margin-right: 35px;">Company Type:</label>
        Client&nbsp;<input type="radio" name="company_type" value="Client"
            <?php if($row['company_type']=="Client"){ echo "checked";}?> id="company"
            style="    margin-left: 10px;">&nbsp;&nbsp;
        Vendor&nbsp;<input type="radio" name="company_type" value="Vendor"
            <?php if($row['company_type']=="Vendor"){ echo "checked";}?> id="company">
    </p>

    <a href="companytype.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" name="updatebtn" value="update" class="btn btn-primary"
        style="    margin-bottom: 65px; margin-top: 63px; margin-left: 15px;">

</form>
<?php
   } 
  }
        ?>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>