<?php

include 'dbconnect.php';

$data = mysqli_query($db, "SELECT * FROM inventory");

?>
    <DOCTYPE html>

    <html>
    <head>
        <title>Delete Data</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
<body>

<?php
if(mysqli_num_rows($data) > 0)
{
    ?>

    <h1>Delete Data</h1>
    <table border="1" id="data">
        <tr>

            <th>ID</th>
            <th>Size</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Delete</th>
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
                <?php echo '<td><a href="#" onclick="myFunction('.$row['id'].')">Delete</a></td>';?>
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


<script>

    function myFunction(id) {
        var r = confirm("are you sure you want to delete this record?");
        if(r == true) {
            window.location.assign("delete.php?id=" + id);
        }
    }
</script>

</body>
    </html>