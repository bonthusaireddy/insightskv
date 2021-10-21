<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php
include('includes/imp/conn1.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);

// SQL query to select data from database
$sql = "SELECT * FROM projects ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
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
                        <th>VIEW </th>
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
                                <form action="projectview.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <button type="submit" class="btn btn-danger"> VIEW</button>
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


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>