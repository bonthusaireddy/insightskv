<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php
include('includes/imp/conn1.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM company_mangement ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Company
                <button type="button" class="btn btn-primary">
                  <a href="addcompany.php" style="color:white">  Add Company</a>
                </button>
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Company Email Id</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Type</th>
                            <th scope="col">Country</th>
                            <th scope="col">Contact Name </th>
                            <th scope="col">Phone Number </th>                           
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
            if ($result->num_rows > 0) {
				//output data of each row
                // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['email_p'];?></td>
                    <td><?php echo $rows['company_name'];?></td>
                    <td><?php echo $rows['company_type'];?></td>
                    <td><?php echo $rows['country'];?></td>
                    <td><?php echo $rows['display_name'];?></td>
                    <td><?php echo $rows['phone_p'];?></td>
               

                        <td>
                                <form action="editcompany.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $rows['id'];?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="delete_id" value="">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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