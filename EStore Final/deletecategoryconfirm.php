<?php

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['admin'])) {
    header('location:index.php');
}
?>


<h1>Confirm category to delete</h1>

<?php
$delcat_sql = "SELECT * FROM category WHERE categoryID=" . $_GET['categoryID'];
$delcat_query = mysqli_query($db, $delcat_sql);
$check_sql = "SELECT * FROM stock WHERE categoryID=" . $_GET['categoryID'];
$ckeck_query = mysqli_query($db, $check_sql);
$count = mysqli_num_rows($ckeck_query);
?>



<p><?php if($count>0) {

echo "Warning! There are ".$count." stock item(s) in this category. If you delete the category they will also be removed from the database";

} ?>

</p>

<p><?php echo "Do you really wish to delete ".$delcat_rs['name']."?"; ?></p>

<p><a href="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>">Yes, delete it!</a> | <a href="index.php?page=deletecategoryselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>