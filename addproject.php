<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/imp/conn.php');
?>


<?php 
include "test.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
	$project_name = $_POST['project_name'];
	$client_name = $_POST['client_name'];
    $type = $_POST['type'];
	$parent_project = $_POST['parent_project'];
	$project_manager = $_POST['project_manager'];
    $country = $_POST['country'];
    $client_contact = $_POST['client_contact'];
    $sales_person = $_POST['sales_person'];
    $req_compelet = $_POST['req_compelet'];
    $cpc = $_POST['cpc'];
    $ir = $_POST['ir'];
    $survey_link = $_POST['survey_link'];
    $status = $_POST['status'];
    $max_complete = $_POST['max_complete'];
    $loi = $_POST['loi'];
    $note = $_POST['note'];
   
    

		//write sql query

		$sql = "INSERT INTO `projects`(`project_name`, `client_name`, `type`, `parent_project`,  `project_manager`, `country`, `client_contact`, `sales_person`, `req_compelet`, `cpc`, `ir`, `survey_link`, `status`, `max_complete`, `loi`, `note`) VALUES 
     ('$project_name','$client_name','$type','$parent_project','$project_manager', '$country', '$client_contact', '$sales_person', '$req_compelet', '$cpc', '$ir',  '$survey_link', '$status', '$max_complete', '$loi', '$note')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}

?>

<?php 
$sql = "select id, project_name from parent_projects";
$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<h1 class="heading_company">Personal information:</h1>
<form action="database.php" method="POST">
    <!-- <fieldset style="width: 66%;margin-left: 222px;"> -->
    <p style="margin-left: 174px;">
        <label for="Projectname">Project name:</label>
        <input type="text" name="project_name" style="margin-left: 16px;">

        <label for="project_friendly_name" style="margin-left: 107px;">Project Friendly Name:</label>
        <input type="text" name="project_friendly_name" style="margin-left: 16px;">
    </p>


    <p>
        <label for="parent_project" name="parent_project" style="margin-left: 162px;">Parent Project:</label>
        <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">
            <option value="0" name="parent_project">Select Parent Project</option>
            <option value="0" name="parent_project">No parent project</option>
            <?php 
            while($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['id']; ?>" name="parent_project"><?php echo $row['project_name']; ?></option>
            <?php 
            }?>    
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
        <label for="Projectname" style="    margin-left: 171px;"> Client name:</label>
        <input type="text" name="client_name" style="margin-left: 24px;">
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
        <select name="client_contact" style="    width: 178px;height: 30px;margin-left: 24px">
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
        Requ. Complete <input type="text" name="req_compelet"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 99,999)</p>

        CPC $<input type="text" name="cpc" style="    margin-left: 73px;"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between $0.1 to $1,000)</p>

        IR:<input type="text" name="ir" style="    margin-left: 101px;"><br>
        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;%(Must be between 1 to 100)</p>

        <div class="survey">
            <label style="    margin-right: 12px;"> Survey Link :<label>
                    <input type="text" name="survey_link"
                        style="  height: 61px; width: 250px;    margin-left: 28px;"><br>
        </div>
        <br>
        <div class="div2" >
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
            <input type="text" name="loi" style="margin-right: -52px;">
        </div>
        <br>
        <div class="survey" style="position:relative; float:right;left: -10px; bottom: 19vh;">
            <label style="   margin-right: 71px;"> Note :</label>
            <input type="text" name="note" style="height: 61px;width: 250px;    margin-right: -72px;"><br>
        </div>
    </fieldset>
    <div class="btn5">
        <input type="submit" name="addproject" value="submit" style="    margin-left: 510px;">
        <button><a href="project.php">Cancel</a></button>
    </div>
</form>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>