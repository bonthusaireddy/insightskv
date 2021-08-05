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
<form action="database.php" method="POST">
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Personal Information</h2>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Project name:</span>
    			        <input class="form-control"type="text" name="project_name"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Project Friendly Name:</span>
    			        <input class="form-control" id="project_friendly_name" type="text" name="project_friendly_name"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Parent Project:</span>
                        <select name="parent_project">
            <option value="0" name="parent_project">Select Parent Project</option>
            <option value="0" name="parent_project">No parent project</option>
            <?php 
            while($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['id']; ?>" name="parent_project"><?php echo $row['project_name']; ?></option>
            <?php 
            }?>    
        </select>
    		        </div>  
                </div>
	       </div>
		</div>
	</div>

           </div>
       </div>
   
   </div>
</div>
<br><br><br>
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Contact & Region</h2>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text"> Client name:</span>
    			        <input class="form-control" type="text" name="client_name"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Project Manager:</span>
                     <select name="project_manager" class="form-control">
                         <option value="" name="project_manager">Select Project Manager</option>
                         <option value="demo1" name="project_manager">demo1</option>
                          </select>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Country:</span>
                        <select name="country" class="form-control">
            <option value="" name="country">Select Country</option>
            <option value="India" name="country">India</option>
            <option value="dombivli" name="country">dombivli</option>
            <option value="kalyan" name="country">kalyan</option>
        </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Client Contact</span>
                     <select name="client_contact" class="form-control">
            <option value="contact">Select Contact</option>
            <option value="" name="client_contact">Saab</option>
            <option value="Opel" name="client_contact">Opel</option>
            <option value="Audi" name="client_contact">Audi</option>
        </select>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
<br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Sales Person:</span>
                        <select name="sales_person" id="cars"   class="form-control">
            <option value="demo" name="sales_person">Select Sales Person</option>
            <option value="demo1" name="sales_person">demo1</option>
        </select>
    		        </div>  
                </div>
	       </div>
		</div>
	</div>

           </div>
       </div>
   
   </div>
</div>
<br><br><br>
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Others</h2>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Req.Complete</span>
    			        <input class="form-control" type="text" name="req_completes"/>
                        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 99,999)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Max Completes</span>
                     <select name="max_complete" id="cars" class="form-control">
                <option value="0" name="max_complete">Select </option>
                <option value="1" name="max_complete">1</option>
                <option value="2" name="max_complete">2</option>
                <option value="3" name="max_complete">3</option>
                <option value="4" name="max_complete">4</option>
            </select>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text"> &emsp;&emsp;CPC $</span>
    			        <input class="form-control" type="text" name="cpc"/>
                        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between $0.1 to $1,000)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">LOI:</span>
    			        <input class="form-control" type="text" name="cpc"/> 
                </div>
	       </div>
		</div>
	</div>
    </div>
<br><br>
<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">IR:</span>
    			        <input class="form-control" type="text" name="cpc"/>
                        <p> &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 100)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
	       </div>
		</div>
	</div>
    </div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Survey Link =</span> 
                        <textarea name="survey_link" id="survey_link" cols="60" rows="5" ></textarea>
    		        </div>  
                </div>
	       </div>
           <br><br><br>
           <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Status </span>
                             <select name="status" class="form-control">
                             <option value="Testing" name="status">Testing</option>
                             <option value="Running" name="status">Running</option>
                             <option value="Hold" name="status">Hold</option>
                             <option value="Complete" name="status">Complete</option>
                             <option value="Closed" name="status">Closed</option>
                             </select>
    		        </div>
                </div>
		</div>
	</div>
<br><br>
    <p class="col-sm" style="text-align: center;" >
         <input type="submit" name="addproject" value="submit" />
         <button><a href="project.php">Cancel</a></button>
      </p>

           </div>
       </div>
   
   </div>
</div>
</form>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>