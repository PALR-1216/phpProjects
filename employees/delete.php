<?php 
include 'dbconnect.php';
$sql = "DELETE FROM employees WHERE userid = '" . $_GET["userid"] . "'";
if(mysqli_query($db, $sql)){
	echo '<script>alert("Record deleted succesfully!");</script>';
	//prompts the user 
	echo '<script>window.location.assign("display.php");</script>';
}
else {
	echo '<script>alert("Error deleting record: " . mysqli_error($db)!");</script>';
}
mysqli_close($db);
?>