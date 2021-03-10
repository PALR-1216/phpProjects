<?php

include 'dbconnect.php';
//lets me know if the user pressed the submit button
if(isset($_POST['submit'])) {

$Colors;
$Size;
$quantity;

//get the value of the colors
    if (!empty($_POST["colors"])) {
        foreach ($_POST["colors"] as $color) {
            $Colors = $color;
        }
    }

    if(!empty($_POST["sizes"])) {
        foreach ($_POST["sizes"] as $size){
            $Size = $size;
        }
    }

    $quantity = $_POST["cantidad"];

    $sql = "INSERT INTO inventory(sizeOfShirt, colorOfShirt, quantityOfShirt) VALUES ('$Colors', '$Size', '$quantity')";

    if(mysqli_query($db, $sql)) {
        mysqli_close($db);

        echo '<script> alert("New Data Added");</script>';
        echo '<script>window.location.assign("display.php"); </script>';

    }

    else{
        echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)");</script>';
        mysqli_close($db);
        echo '<script>window.location.assign("addData.php");</script>';
    }
}


?>


