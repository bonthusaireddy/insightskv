<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php
include('includes/imp/conn1.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);

// SQL query to select data from database
$sql = "SELECT * FROM projects WHERE active_status=1 ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<?php
 if(isset($_POST['deletes'])){
	 $id = $_REQUEST['id'];
	 $sql = "UPDATE projects SET active_status='0' WHERE id='$id'";
	 if (mysqli_query($conn, $sql)) {
	
             echo "<script>location.href='manageproject.php'</script>";		
                                    } 
     else {
             echo "Error occured while updating Record: " . $sql . "<br>" . mysqli_error($conn);
          }
                             }
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
            <!-- Add Project -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    <a href="addproject.php" style="color:white">Add Project</a>
                </button>
            </h6>
        </div>

        <div class="card-body">

           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Client Name</th>
                        
                        
                        <th>Manager Name</th>
                        
                        <!--<th>Pre-Scr</th> -->
                        <th>Complete</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>EDIT </th>
                        <th>DELETE </th>
						
                    </tr>
                </thead>
                <tbody>
                    <?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['project_name']; ?></td>
                        <td><?php echo $row['client_name']; ?></td>
                        
                        
                        <td><?php echo $row['project_manager']; ?></td>
                        
                        <?php 
                         $project_id = $row['id'];
                         $sql_for_complete = "SELECT COUNT(project_id) as complete_count from surveys where status = 1 and project_id = $project_id ";
                         $sql_complete = $conn->query($sql_for_complete);
                         $complete_count = mysqli_fetch_assoc($sql_complete);
                        ?>
                        <td><?php echo $complete_count['complete_count'] ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['status']; ?></td>

                        
                        <td>
                                <!-- <form action="editproject.php" method="post">
                                    <input type="hidden" name="edits_id" value="">
                                    <button type="submit" name="edit_btns" class="btn btn-success"> EDIT</button>
                                </form> -->
                        
                                <form action="projectview.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <button type="submit" class="btn btn-success"> EDIT</button>
                                </form>
                            
                            
                            </td>
                            <td>
                                <form action="manageproject.php?id=<?php echo $row['id'];?>" method="post">                               
                                    <input type="submit" name="deletes" value="DELETE" onclick="myFunction()" class="btn btn-danger"> 
                                </form>
                            </td>
							 
                    </tr>

                    <?php	
					                         
                    	}
			}
		?>

                </tbody>
            </table>
            </div>
        </div>
    </div>

</div>
<script>
function myFunction() 
{
  var txt;
  var r = confirm("Are You Sure Want to DELETE!");
  if (r == true) {
     
  } else {
	event.preventDefault()  
    return false;
  }
}
</script>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>