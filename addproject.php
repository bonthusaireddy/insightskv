<?php
include('includes/imp/islogin.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/imp/conn.php');
?>

<?php 
$sql = "select id, project_name from parent_projects";
$result = mysqli_query($conn, $sql);
?>
<?php 
$sql = "select client_name from client";
$result2 = mysqli_query($conn, $sql);
?>
<form action="database.php" method="POST">
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Personal Information</h2>
           <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Project name:</span>
    			        <input class="form-control"type="text" name="project_name" required/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Project Friendly Name:</span>
    			        <input class="form-control" id="project_friendly_name" type="text" required name="project_friendly_name"/>
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
                        <select  name="parent_project">
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
<br><br><hr class="solid"><br>
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Contact & Region</h2>
           <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text"> Client name:</span>
    			        <!-- <input class="form-control" type="text" name="client_name"/> -->
                <select name="client_name" id="client_name" style=" width: 189px;height: 34px;">
                <option value="0" name="client_name">Select Client</option>
                <?php 
                while($row = mysqli_fetch_row($result2)) { ?>
                <option value="<?php echo $row[0]; ?>" name="client_name"><?php echo $row[0]; ?></option>
                <?php 
                    }?>  
                </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Project Manager:</span>
                     <!-- <select name="project_manager" class="form-control">
                         <option value="" name="project_manager">Select Project Manager</option>
                         <option value="default" name="project_manager">default</option>
                          </select> -->
                    <input type="text" require name="project_manager" class="form-control"/>
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
            <option value="0" name="country">Select Country</option>
            <option value="India" name="country">India</option>
            <option value="dombivli" name="country">dombivli</option>
            <option value="kalyan" name="country">kalyan</option>
        </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Client Contact</span>
            <input type="text"  require name="client_contact" class="form-control">
                    <!-- <select name="client_contact" class="form-control">
                        <option value="0">Select Contact</option>
                        <option value="default" name="client_contact">default</option>
                    </select> -->
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
               <input type="text" require name="sales_person" class="form-control">
                        <!-- <select name="sales_person" id="cars"   class="form-control">
            <option value="0" name="sales_person">Select Sales Person</option>
            <option value="default" name="sales_person">default</option>
        </select> -->
    		        </div>  
                </div>
	       </div>
		</div>
	</div>

           </div>
       </div>
   
   </div>
</div>
<br><br><hr class="solid"><br>
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Others</h2>
           <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Req.Complete</span>
    			        <input class="form-control" required type="text" name="req_complete"/>
                        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 99,999)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Max Completes</span>
                     <input type="text" required name="max_complete" class="form-control"/>
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
    			        <input class="form-control" required type="text" name="cpc"/>
                        <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between $0.1 to $1,000)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">LOI:</span>
    			        <input class="form-control" type="text" required name="loi"/> 
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
    			        <input class="form-control" type="text" required name="ir"/>
                        <p> &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;(Must be between 1 to 100)</p>
                        
    		        </div>  
                </div>
                <div class="col-sm-6">
	       </div>
		</div>
	</div>
    </div>
    <br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Survey Link =</span> 
                        <textarea name="survey_link" required id="survey_link" cols="60" rows="5" ></textarea>
    		        </div>  
                </div>
	       </div>
           <br><br>
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
<hr class="solid">
</form>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>