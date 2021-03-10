<?php
include 'dbconnect.php';
$sql = "DELETE FROM inventory WHERE id = '" . $_GET["id"] . "'";
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