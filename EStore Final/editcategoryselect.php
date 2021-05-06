<?php

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['admin'])) {
    header("location:index.php");

}

unset($_SESSION['editcategory']);

$editCat_sql = "SELECT * FROM category";
$editCat_query = mysqli_query($db, $editCat_sql);
$editCat_rs = mysqli_fetch_assoc($editCat_query);

?>

<h1>Edit Category</h1>
<?php do{ ?>
    <p><a href="index.php?page=editcategory&categoryID=<?php echo $editCat_rs['categoryID']; ?>"> <?php echo $editCat_rs['name']; ?></a></p>
<?php

}while($editCat_rs=mysqli_fetch_assoc($editCat_query)); ?>