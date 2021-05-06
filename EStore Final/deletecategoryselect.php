<?php
// delete categoryselect.php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['admin'])){
    header('location:index.php');

}
?>


<h1>Delete Category</h1>
<?php

$delcat_sql =  "SELECT * FROM category";
$delcat_query = mysqli_query($db, $delcat_sql);
$delCat_res = mysqli_fetch_assoc($delcat_query);

do{ ?>
    <p><a href="index.php?page=deletecategoryconfirm&categoryID= <?php echo $delCat_res['categoryID']; ?>"><?php echo $delCat_res['name']; ?></a></p>

    <?php
}while($delCat_res = mysqli_fetch_assoc($delcat_query));