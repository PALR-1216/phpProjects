<?php

include 'dbconnect.php';

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO employees (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";

	 if (mysqli_query($db, $sql)) {
		mysqli_close($db);

		echo '<script>alert("New record created successfully");</script>'; 
		//Prompts the user
		echo '<script>window.location.assign("display.php");</script>';	
	 } else {

		echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)");</script>';
		mysqli_close($db);
		echo '<script>window.location.assign("addform.php");</script>';	
	 }
}

?>

