<?php

include 'dbconnect.php';

$data = mysqli_query($db, "SELECT * FROM inventory");

?>
<DOCTYPE html>

    <html>
    <head>
        <title>Display Data</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>

    <?php
if(mysqli_num_rows($data) > 0)
{
    ?>

    <h1>Display Data</h1>
    <table border="1" id="data">
        <tr>

            <th>ID</th>
            <th>Size</th>
            <th>Color</th>
            <th>Quantity</th>
        </tr>

        <?php

    $i = 0;
    while($row = mysqli_fetch_array($data))
    {

    ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["sizeOfShirt"]; ?></td>
            <td><?php echo $row["colorOfShirt"]; ?></td>
            <td><?php echo $row["quantityOfShirt"]; ?></td>
        </tr>

        <?php
        $i++;

    }
        ?>
    </table>

    <?php
}
else{
    echo "No Data found";
}
?>

    <a href="addData.php" id="button">Add Data</a>
    <a href="deleteData.php" id="button">Delete Data</a>
    </body>
    </html>




