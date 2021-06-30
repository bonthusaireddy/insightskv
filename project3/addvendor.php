<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<h1 class="heading_company">Project Vendor Details</h1>
<form action="insert.php" method="post">
    <p style="margin-left: 174px;">
        <label for="firstName">Project Vendor :</label>
        <!-- <input type="text" name="company_name" id="company_name" style="    margin-left: 16px;"> -->
        <select name="parent_project" style=" width: 189px;height: 34px;    margin-left: 49px;">
          <option value="parent_project" name="parent_project">Select Vendor</option>
             <option value="demo0" name="parent_project">demo0</option>
            <option value="demo1" name="parent_project">demo1</option>
            <option value="demo2" name="parent_project">demo2</option>
            <option value="demo3" name="parent_project">demo3</option>
            <option value="demo4" name="parent_project">demo4</option>
            <option value="demo5" name="parent_project">demo5</option>
            </select>


        <label for="lastName" style="    margin-left: 47px;">Vendor Contact :</label>
        <!-- <input type="text" name="parent_company_name" id="parent_company" style="    margin-left: 17px;"> -->
        <select name="parent_project" style=" width: 189px;height: 34px;    margin-left: 59px;">
          <option value="parent_project" name="parent_project">Select Contact</option>
             <option value="demo0" name="parent_project">demo0</option>
            <option value="demo1" name="parent_project">demo1</option>
            <option value="demo2" name="parent_project">demo2</option>
            <option value="demo3" name="parent_project">demo3</option>
            <option value="demo4" name="parent_project">demo4</option>
            <option value="demo5" name="parent_project">demo5</option>
            </select>
    </p>

   
    <hr class="solid">
    <h1 class="heading_company">Cost & Completes</h1>
    <p class="textbox_addcompany">
        <label for="Address">Cost Per Complete :</label>&nbsp;&nbsp;
        <input type="text" name="address_one" id="Address_one" style="    margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;

        <label for="Address" style="margin-left: 23px;">Req. Completes :</label>&nbsp;&nbsp;
        <input type="text" name="address_two" id="Address_two" style=" margin-left: 49px;">
       
    </p>
    <p class="textbox_addcompany">
        <label for="Address">Max. Completes :</label>&nbsp;&nbsp;
        <!-- <input type="text" name="address_three" id="Address_three" style="    margin-left: 35px;"> -->
        <select name="parent_project" style=" width: 189px;height: 34px;    margin-left: 29px;">
          <option value="parent_project" name="parent_project">Select Contact</option>
             <option value="demo0" name="parent_project">demo0</option>
            <option value="demo1" name="parent_project">demo1</option>
            <option value="demo2" name="parent_project">demo2</option>
            <option value="demo3" name="parent_project">demo3</option>
            <option value="demo4" name="parent_project">demo4</option>
            <option value="demo5" name="parent_project">demo5</option>
            </select>
    </p>
    </hr>
    <hr class="solid">
    <h1 class="heading_company">  Surveys Redirect Details</h1>
  
    <p class="textbox_addcompany">
        <label for="Address">Max. Redirects:</label>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="address_three" id="Address_three" style="    margin-left: 36px;">
        <label for="Address" style="margin-left: 41px;">Completion link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="address_three" id="Address_three" style="height: 81px;margin-left: 44px;">
      
    </p>
    <p class="textbox_addcompany1">
        <label for="Address">Disqualify link :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="address_three" id="Address_three" style="margin-left: 9px;height: 81px;">
        <label for="Address" style="    margin-left: 38px;">Quotafull link:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="zip" id="Address" style="    margin-left: 37px;height: 81px;">
    </p>

    
    <hr class="solid">
    <h1 class="heading_company">Vendor Project Status</h1>
        <label for="completionlink" style="margin-left: 187px;">Vendor Project Status :</label>
        <select name="parent_project" style=" width: 189px;height: 34px;    margin-left: 8px;">
          <option value="parent_project" name="parent_project">Select Contact</option>
             <option value="demo0" name="parent_project">demo0</option>
            <option value="demo1" name="parent_project">demo1</option>
            <option value="demo2" name="parent_project">demo2</option>
            <option value="demo3" name="parent_project">demo3</option>
            <option value="demo4" name="parent_project">demo4</option>
            <option value="demo5" name="parent_project">demo5</option>
            </select>
       
        <label for="disqualifylink" style="margin-left: 36px;">Notes :</label>
        <input type="text" name="disqualifylink" style="margin-left: 130px;">
       
        <a href="editproject.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" value="Submit" class="btn btn-primary" style="    margin-bottom: 65px; margin-top: 64px;width: 100px;">
</form>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>