<?php
include('includes/imp/islogin.php');
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
        $('#completion_link').val(response);
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


<form action="database.php" method="post">
<input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
<div class="container">
   <div class="container">
       <div class="container">
           <div class="container">
           <h2>Project Vendor Details</h2>
           <br><br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Project Vendor</span>
                        <select name="vendor_id" id="vendor_id" class="form-control"  onchange="recp(this.value);">
          <option value="parent_project" name="parent_project">Select Vendor</option>
            <?php 
            while($row = mysqli_fetch_row($result)) { ?>
                <option value="<?php echo $row[0]; ?>" name="parent_project"><?php echo $row[1]; ?></option>
            <?php 
            }?>  
            </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Vendor Contact:</span>
                     <select name="vendor_contact" id="vendor_contact" class="form-control">
          <option value="parent_project" name="vendor_contact">Select Contact</option>
             <option value="demo0" name="vendor_contact">default</option>
            
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
           <h2>Cost & Completes</h2>
           <br><br>
	<div class="row">
    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Cost Per Complete : </span>
    			        <input class="form-control"type="text"name="cost_per_complete" id="cost_per_complete"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Req.Completes:</span>
    			        <input class="form-control" type="text"  name="req_complete" id="req_complete" />
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
    			        <span class="input-group-text">Max.Completes:</span>
               <input type="text"name="max_complete" id="max_complete"  class="form-control">
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
           <h2>Surveys Redirect Details</h2>
           <br><br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Max.Redirects:</span>
    			        <input class="form-control" type="text" id="max_redirects" name="max_redirects" id="Address_three"/>
                 </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Completion link:</span>
                     <textarea  id="completion_link" class="form-control" name="completion_link" placeholder="Link" ></textarea>
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
    			        <span class="input-group-text">Disqualify link:</span>
                        <textarea  class="form-control" id="disqualify_link" name="disqualify_link" placeholder="Link" ></textarea>
                    </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Quotafull link:</span>
    			        <textarea  class="form-control" id="quotafull_link"  name="quotafull_link" placeholder="Link" ></textarea>
                </div>
	       </div>
		</div>
	</div>
    </div>
    
<br><hr class="solid"><br><br>
<div class="container">
 <h2>Project Vendor Details</h2>
 <br><br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Vendor Project Status:</span>
                        <select name="status" id="status" class="form-control">
          <option value="0" id="status" name="status">Select status</option>

             <option value="Testing" name="status">Testing</option>
                <option value="Running" name="status">Running</option>
                <option value="Hold" name="status">Hold</option>
                <option value="Complete" name="status">Complete</option>
                <option value="Closed" name="status">Closed</option>
            
            </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Note</span>
                     <input type="text" name="note" id="note">
    		        </div>
                </div>
	       </div>
		</div>
        <br><br><br>
     <div class="container">
     <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div style="text-align: end;">
                    <a href="editproject.php" class="btn btn-danger" > CANCEL </a>
                    </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                    <input type="submit" name="add_project_vendors" value="Submit" class="btn btn-primary">
                </div>
	       </div>
		</div>
	</div>
    </div>
     </div>
	</div>
   </div>
 </div>
 </div>


 
  </div>
       </div>
   

</form>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>