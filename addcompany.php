<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<h1 class="heading_company">Company Details</h1>
<form action="database.php" method="post">
    <p style="margin-left: 174px;">
        <label for="firstName">Company Name</label>
        <input type="text" name="company_name" id="company_name" style="    margin-left: 16px;">


        <label for="lastName" style="    margin-left: 47px;">Parent Company:</label>
        <input type="text" name="parent_company_name" id="parent_company" style="    margin-left: 17px;">
    </p>

    <p style="margin-left: 174px;">
        <label for="Gender">Display Name:</label>
        <input type="text" name="display_name" id="display_name" style="margin-left:27px;">

        <label for="Gender" style="margin-left: 46px;    margin-right: 35px;">Company Type:</label>
        Client&nbsp;<input type="checkbox" name="company_type[]" value="Client" id="Gender"
            style="    margin-left: 10px;">&nbsp;&nbsp;
        Vendor&nbsp;<input type="checkbox" name="company_type[]" value="Vendor" id="Gender" class="vendordetails">
    </p>
    <hr class="solid">
    <h1 class="heading_company">Region & Contact Details</h1>
    <p class="textbox_addcompany">
        <label for="Address">Address1:</label>&nbsp;&nbsp;
        <input type="text" name="address_one" id="Address_one" style="    margin-left: 35px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 35px;">Address2 :</label>&nbsp;&nbsp;
        <input type="text" name="address_two" id="Address_two" style=" margin-left: 49px;">

    </p>
    <p class="textbox_addcompany">
        <label for="Address">Address3:</label>&nbsp;&nbsp;
        <input type="text" name="address_three" id="Address_three" style="    margin-left: 35px;">&nbsp;&nbsp;
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Country:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="country" class="countries" id="countryId"
            style="    width: 188px;height: 33px; margin-left: 36px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <option value="">Select Country</option>
        </select>&nbsp;&nbsp;&nbsp;
        <label for="Address" style="margin-left: 41px;">State:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="state" class="states" id="stateId" style="    width: 188px;height: 33px;     margin-left: 66px;">
            <option value="">Select State</option>
        </select>
    </p>
    <p class="textbox_addcompany1">
        <label for="Address">City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="city" class="cities" id="cityId"
            style="    width: 188px;height: 33px;margin-left: 37px;">&nbsp;&nbsp;&nbsp;&nbsp;
            <option value="">Select City</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address"
            style="    margin-left: 38px;">Zip:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="zip" id="Address" style="    margin-left: 54px;">
    </p>
    <br>
    <p class="textbox_addcompany">
        <label for="Address">Primary Email ID:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="email_p" id="Address">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address">Secondary Email ID:</label>&nbsp;&nbsp;&nbsp;
        <input type="text" name="email_s" id="Address">
    </p>

    <p class="textbox_addcompany">
        <label for="Address">Primary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="phone_p" id="Address">&nbsp;&nbsp;

        <label for="Address">Secondary Phone No:</label>&nbsp;&nbsp;
        <input type="text" name="phone_s" id="Address">
    </p>
    <hr class="solid">
    <!-- <p>
<input type="radio" name="type" value="Fresher"> Fresher
<input type="radio" name="type" value="Experienced"> Experienced
</p> -->
    <div id="textboxes" style="display: block">
    <h1 class="heading_company">Surveys Redirect Details</h1>

        <label class="car" for="completion_link" style="margin-left: 187px;">Completion link:</label>
        <textarea name="completion_link" id="completion_link" ></textarea>

        <label class="car" for="disqualify_link" style="margin-left: 183px;">Disqualify link:</label>
        <textarea name="disqualify_link" id="disqualify_link"></textarea>
<div class="car2">
        <label class="car" for="quotafull_link" style="margin-left: 184px;margin-top: 17px;">Quotafull link:</label>
        <textarea name="quotafull_link" id="quotafull_link" style="margin-left: 16px;" ></textarea>
        </div>
    </div>

    <input type="submit" value="Submit" name="addcompany" class="submit_btn" style="    margin-bottom: 65px; margin-top: 36px;">
</form>

<style>
    .car{
        position: relative;
    bottom: 23px;
    }
    .car2{
        margin-top: 25px;
        }
</style>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>