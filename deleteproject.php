<?php 
include "includes/imp/conn.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_POST['delete_btn'])) {
	$user_id = $_POST['delete_id'];

	// write delete query
	$sql = "DELETE FROM `projects` WHERE `id`='$user_id'";
echo $user_id;
	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "project deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
<html>
	<body>
		
	<button><a href="manageproject.php">Go BAck</a></button>
	</body>
</html>