<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php
include('includes/imp/conn.php');

// $connection = mysqli_connect("localhost","root","","company");
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    
    $query = "SELECT * FROM vendor WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    foreach($query_run as $row)
    {
        ?>

<h3>Update Data</h3>

<form action="database.php" method="POST">
<h1 class="heading_company">Company Details</h1>
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

    <p style="margin-left: 174px;">
        <label for="firstName">Company Name</label>
        <input type="text" name="vendor_name" value="<?php echo $row['vendor_name'] ?>" id="company_name"
            style="    margin-left: 16px;">


        <label for="lastName" style="    margin-left: 47px;">Parent Company:</label>
        <input type="text" name="parent_vendor_name" value="<?php echo $row['parent_vendor_name'] ?>"
            id="parent_company" style="    margin-left: 17px;">
    </p>

    <p style="margin-left: 174px;">
        <label for="Gender">Display Name:</label>
        <input type="text" name="display_name" value="<?php echo $row['display_name'] ?>" id="display_name"
            style="margin-left:27px;">

        <label for="Gender" style="margin-left: 46px;    margin-right: 35px;">Company Type:</label>
        Vendor
    </p>
    <hr class="solid">
    <h1 class="heading_company">Region & Contact Details</h1>
    <p class="textbox_addcompany">
        <label for="Address">Address1:</label>&nbsp;&nbsp;
        <input type="text" name="address_one" value="<?php echo $row['address_one'] ?>" id="Address_one"
            style="    margin-left: 35px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 35px;">Address2 :</label>&nbsp;&nbsp;
        <input type="text" name="address_two" value="<?php echo $row['address_two'] ?>" id="Address_two"
            style=" margin-left: 49px;">

    </p>
    <p class="textbox_addcompany">
        <label for="Address">Address3:</label>&nbsp;&nbsp;
        <input type="text" name="address_three" value="<?php echo $row['address_three'] ?>" id="Address_three"
            style="    margin-left: 35px;">&nbsp;&nbsp;
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Country:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- <select name="country" class="countries" id="#"
            style="    width: 188px;height: 33px; margin-left: 36px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <option value=""><?php echo $row['country'] ?></option>
        </select>&nbsp;&nbsp;&nbsp; -->

        <input type="text" name="country" value="<?php echo $row['country'] ?>" id="country"
            style=" width: 188px;height: 33px; margin-left: 36px;">&nbsp;&nbsp;&nbsp;


        <label for="Address" style="margin-left: 41px;">State:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- <select name="state" class="states" id="stateId"
            style="    width: 188px;height: 33px;     margin-left: 66px;">
            <option value=""><?php echo $row['state'] ?></option>
        </select> -->
        <input type="text" name="state" value="<?php echo $row['state'] ?>" id="state"
            style=" width: 188px;height: 33px; margin-left: 66px;">&nbsp;&nbsp;&nbsp;


    </p>
    <p class="textbox_addcompany1">
        <label for="Address">City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- <select name="city" class="cities" id="cityId"
            style="    width: 188px;height: 33px;margin-left: 37px;">&nbsp;&nbsp;&nbsp;&nbsp;
            <option value=""><?php echo $row['city'] ?></option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

        <input type="text" name="city" value="<?php echo $row['city'] ?>" id="city"
            style="    width: 188px;height: 33px;margin-left: 37px;">&nbsp;&nbsp;&nbsp;

        <label for="Address"
            style="margin-left: 38px;">Zip:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="zip" value="<?php echo $row['zip'] ?>" id="Address"
            style="    margin-left: 54px;">
    </p>
    <br>
    <p class="textbox_addcompany">
        <label for="Address">Primary Email ID:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="email_p" value="<?php echo $row['email_p'] ?>"
            id="Address">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address">Secondary Email ID:</label>&nbsp;&nbsp;&nbsp;
        <input type="text" name="email_s" value="<?php echo $row['email_s'] ?>" id="Address">
    </p>

    <p class="textbox_addcompany">
        <label for="Address">Primary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="phone_p" value="<?php echo $row['phone_p'] ?>" id="Address">&nbsp;&nbsp;

        <label for="Address">Secondary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="phone_s" value="<?php echo $row['phone_s'] ?>" id="Address">
    </p>
    <hr class="solid">
  
    <div id="textboxes">
        <h1 class="heading_company">Surveys Redirect Details</h1>
        <label  class="car4" for="completion_link">Complete link:</label>
        <textarea name="completion_link" id="completion_link" cols="30" rows="2"><?php echo $row['completion_link'] ?></textarea>

        <label  class="car3" for="disqualify_link" style="margin-left: 70px;">Disqualify link:</label>
        <textarea name="disqualify_link" id="disqualify_link" cols="30" rows="2"><?php echo $row['disqualify_link'] ?></textarea>

        <label class="car3" for="quotafulllink" >Quotafull link:</label>
        <textarea name="quotafull_link" id="quotafull_link" cols="30" rows="2"><?php echo $row['quotafull_link'] ?></textarea>

    </div>
    <a href="companytype.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" name="vendoredit" value="update" class="btn btn-primary"
        style="    margin-bottom: 65px; margin-top: 63px; margin-left: 15px;">

</form>

<style>
    .car3{
        margin-left: 400px; 
        margin-top: 90px;
         position: 
         relative;
         bottom: 19px;
    }
    .car4{
        margin-left: 160px;
         
        margin-top: 90px;
         position: 
         relative;
         bottom: 19px;
    }
</style>
<?php
   } 
  }
        ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>