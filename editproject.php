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
    $ids = $_POST['edit_id'];
    echo $ids;
    $query = "SELECT * FROM projects WHERE id='$ids' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>


<form action="code.php" method="POST">
<h1 class="heading_company">Company Details</h1>
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>"/>

    <!-- <fieldset style="width: 66%;margin-left: 222px;"> -->
    <p style="margin-left: 174px;">
        <label for="Projectname"> Project name:</label>
        <input type="text" name="edit_project_name"  value="<?php echo $row['project_name']; ?>"style="    margin-left: 16px;">

        <label for="Clientname" style="    margin-left: 107px;">Client name:</label>
        <input type="text" name="edit_client-name" value="<?php echo $row['client_name']; ?>" style="margin-left: 16px;">
    </p>


    <p>
        <label for="type" style="margin-left: 172px;">Type:</label>
        <input type="radio" name="type" value="Vendor"  <?php if($row['type']=="Vendor"){ echo "checked";}?> style="margin-left: 78px;">Vendor
        <input type="radio" name="type" value="Client"  <?php if($row['type']=="Client"){ echo "checked";}?> style="    margin-left: 9px;">Client


        <label for="parent_project" name="parent_project" style="    margin-left: 162px; ">Parent Project:</label>
        <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">
            <option value="parent_project" name="parent_project">Select Parent Project</option>
            <option value="demo0" name="parent_project">demo0</option>
            <option value="demo1" name="parent_project">demo1</option>
            <option value="demo2" name="parent_project">demo2</option>
            <option value="demo3" name="parent_project">demo3</option>
            <option value="demo4" name="parent_project">demo4</option>
            <option value="demo5" name="parent_project">demo5</option>
        </select>
    </p>



    </div>
    <br>
    <!-- <div class="div2" style=" ">
    </div> -->

    <!-- 
        </fieldset> -->
    <hr class="solid">
    <h1 class="heading_company">Contact & Region</h1>
    <p>
        <label for="Projectname" style="    margin-left: 171px;" > Client name:</label>
        <input type="text" name="edit_client_name" value="" style="margin-left: 24px;" value="">
        <label for=" cars" style="    margin-left: 111px;">Project Manager</label>
        <select name="project_manager" style=" width: 175px;height: 30px;margin-left: 10px;">
            <option value="" name="project_manager">Select Project Manager</option>
            <option value="demo1" name="project_manager">demo1</option>
        </select>
    </p>
    <p>
        <!-- <div class="div2" style=" "> -->
        <label for="cars" style="    margin-left: 169px;">Country</label>
        <select name="country" style="  width: 187px;height: 30px;margin-left: 56px">
            <option value="" name="country">Select Country</option>
            <option value="India" name="country">India</option>
            <option value="dombivli" name="country">dombivli</option>
            <option value="kalyan" name="country">kalyan</option>
        </select>
        <!-- </div> -->

        <!-- <div class="div2" style="position:relative; float:right;"> -->
        <label for="cars" style="margin-left: 114px;">Client Contact</label>
        <select name="client_contact" style="width: 178px;height: 30px;margin-left: 24px">
            <option value="contact">Select Contact</option>
            <option value="" name="client_contact">Saab</option>
            <option value="" name="client_contact">Opel</option>
            <option value="" name="client_contact">Audi</option>
        </select>
    </p>
    <!-- </div> -->

    <!-- <div class="div2" style="position:relative; float:right;"> -->
    <p>
        <label for="cars" style=" margin-left: 166px;">Sales Person</label>
        <select name="sales_person" id="cars" style="width: 185px; height: 30px;margin-left: 23px;">
            <option value="demo" name="sales_person">Select Sales Person</option>
            <option value="demo1" name="sales_person">demo1</option>
        </select>
    </p>

    <!-- </div> -->




    <h1 class="heading_company">Other</h1>
    <fieldset style="width: 66%;margin-left: 176px;">
        <br>
        Requ. Complete <input type="text" name="req_compelet" value="<?php echo $row['req_compelet']; ?>"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 99,999)</p>

        CPC $<input type="text" name="cpc" style="    margin-left: 73px;" value="<?php echo $row['cpc']; ?>"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between $0.1 to $1,000)</p>

        IR:<input type="text" name="ir" style="    margin-left: 101px;" value="<?php echo $row['ir']; ?>"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;%(Must be between 1 to 100)</p>

        <div class="survey">
            <label style="    margin-right: 12px;"> Survey Link :<label>
                    <input type="text" name="survey_link"
                        style="  height: 61px; width: 250px;    margin-left: 28px;"><br>
        </div>
        <br>
        <div class="div2" style="">
            <label for="cars">Status</label>
            <select name="status" style="    width: 178px; height: 30px; margin-left: 70px;">
                <option value="Testing" name="status">Testing</option>
                <option value="Running" name="status">Running</option>
                <option value="Hold" name="status">Hold</option>
                <option value="Complete" name="status">Complete</option>
                <option value="Closed" name="status">Closed</option>
            </select>
        </div>
        <br>
        <div class="div2" style="position:relative; float:right;  bottom: 60vh;">
            <label style="    margin-right: 12px;">Max Completes</label>
            <select name="max_complete" id="cars" style=" width: 164px; height: 30px; margin-right: 13px;">
                <option value="0" name="max_complete">Select </option>
                <option value="1" name="max_complete">1</option>
                <option value="2" name="max_complete">2</option>
                <option value="3" name="max_complete">3</option>
                <option value="4" name="max_complete">4</option>
            </select>
        </div>

        <div class="div1" style="position:relative; float:right;     left: 255px; bottom: 52vh;">
            <label style="  margin-right: 84px;"> LOI:</label>
            <input type="text" name="loi"  value="<?php echo $row['loi']; ?>" style="margin-right: -52px;">
        </div>
        <br>
        <div class="survey" style="position:relative; float:right;left: -10px; bottom: 19vh;">
            <label style="   margin-right: 71px;"> Note :</label>
            <input type="text" name="note" style="height: 61px;width: 250px;    margin-right: -72px;"  value="<?php echo $row['note']; ?>"><br>
        </div>
    </fieldset>
    <div class="btn5">
    <a href="companytype.php" class="btn btn-danger" style="margin-left: 409px;"> CANCEL </a>
    <input type="submit" name="updatebtnproject" value="updatebtnproject" class="btn btn-primary"
        style="    margin-bottom: 65px; margin-top: 63px; margin-left: 15px;">
    </div>
</form>

<?php
   } 
  }
        ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>