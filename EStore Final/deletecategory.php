<?php

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['admin'])) {
    header('location:index.php');
}
$delcat_sql = "DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
$delcat_query = mysqli_query($db, $delcat_sql);

$delstock_sql = "DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
$delstock_query = mysqli_query($db, $delstock_sql);

?>

<h1>Category Deleted</h1>
<p>Category has successfully been deleted</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>