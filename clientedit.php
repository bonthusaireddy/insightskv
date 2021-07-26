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
    
    $query = "SELECT * FROM client WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    foreach($query_run as $row)
    {
        ?>

<h3>Update Data</h3>

<form action="code.php" method="POST">
<h1 class="heading_company">Company Details</h1>
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

    <p style="margin-left: 174px;">
        <label for="firstName">Company Name</label>
        <input type="text" name="edit_company_name" value="<?php echo $row['client_name'] ?>" id="company_name"
            style="    margin-left: 16px;">


        <label for="lastName" style="    margin-left: 47px;">Parent Company:</label>
        <input type="text" name="edit_parent_company_name" value="<?php echo $row['parent_client_name'] ?>"
            id="parent_company" style="    margin-left: 17px;">
    </p>

    <p style="margin-left: 174px;">
        <label for="Gender">Display Name:</label>
        <input type="text" name="edit_display_name" value="<?php echo $row['display_name'] ?>" id="display_name"
            style="margin-left:27px;">

        <label for="Gender" style="margin-left: 46px;    margin-right: 35px;">Company Type:</label>
        Client
    </p>
    <hr class="solid">
    <h1 class="heading_company">Region & Contact Details</h1>
    <p class="textbox_addcompany">
        <label for="Address">Address1:</label>&nbsp;&nbsp;
        <input type="text" name="edit_address_one" value="<?php echo $row['address_one'] ?>" id="Address_one"
            style="    margin-left: 35px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 35px;">Address2 :</label>&nbsp;&nbsp;
        <input type="text" name="edit_address_two" value="<?php echo $row['address_two'] ?>" id="Address_two"
            style=" margin-left: 49px;">

    </p>
    <p class="textbox_addcompany">
        <label for="Address">Address3:</label>&nbsp;&nbsp;
        <input type="text" name="edit_address_three" value="<?php echo $row['address_three'] ?>" id="Address_three"
            style="    margin-left: 35px;">&nbsp;&nbsp;
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Country:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="edit_country" class="countries" id="countryId"
            style="    width: 188px;height: 33px; margin-left: 36px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <option value="">Select Country</option>
        </select>&nbsp;&nbsp;&nbsp;
        <label for="Address" style="margin-left: 41px;">State:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="edit_state" class="states" id="stateId"
            style="    width: 188px;height: 33px;     margin-left: 66px;">
            <option value="">Select State</option>
        </select>
    </p>
    <p class="textbox_addcompany1">
        <label for="Address">City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="edit_city" class="cities" id="cityId"
            style="    width: 188px;height: 33px;margin-left: 37px;">&nbsp;&nbsp;&nbsp;&nbsp;
            <option value="">Select City</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address"
            style="margin-left: 38px;">Zip:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="edit_zip" value="<?php echo $row['zip'] ?>" id="Address"
            style="    margin-left: 54px;">
    </p>
    <br>
    <p class="textbox_addcompany">
        <label for="Address">Primary Email ID:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="edit_email_p" value="<?php echo $row['email_p'] ?>"
            id="Address">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address">Secondary Email ID:</label>&nbsp;&nbsp;&nbsp;
        <input type="text" name="edit_email_s" value="<?php echo $row['email_s'] ?>" id="Address">
    </p>

    <p class="textbox_addcompany">
        <label for="Address">Primary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="edit_phone_p" value="<?php echo $row['phone_p'] ?>" id="Address">&nbsp;&nbsp;

        <label for="Address">Secondary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="edit_phone_s" value="<?php echo $row['phone_s'] ?>" id="Address">
    </p>
    <hr class="solid">
  
    <div id="textboxes" style="display: none">
        <h1 class="heading_company">Surveys Redirect Details</h1>
        <label for="completionlink" style="margin-left: 187px;">Completion link:</label>
        <input type="text" name="edit_completionlink" value="<?php echo $row['completionlink'] ?>"
            style="margin-left: 26px;" />
        <label for="disqualifylink" style="margin-left: 12px;">Disqualify link:</label>
        <input type="text" name="edit_disqualifylink" value="<?php echo $ow['disqualifylink'] ?>"
            style="margin-left: 56px;">
        <label for="quotafulllink" style="margin-left: 184px;margin-top: 17px;">Quotafull link:</label>
        <input type="text" name="edit_quotafulllink" value="<?php echo $row['quotafulllink'] ?>"
            style="margin-left: 42px;">
    </div>
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