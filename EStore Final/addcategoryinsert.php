<?php

	include("dbconnect.php");

	session_start();

	if(!isset($_SESSION['admin'])) {

		header("Location:index.php");

	}

	$newcat_sql="INSERT INTO category (name) VALUES ('".$_SESSION['addcategory']."')";

	$newcat_query=mysqli_query($db, $newcat_sql);

	unset($_SESSION['addcategory']);

?>

<h1>Add new category</h1>

<p>New category entered</p>

<p><a href="index.php?page=admin">Back to admin panel</a></p>