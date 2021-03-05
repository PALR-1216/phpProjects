<?php

include 'dbconnect.php';
$result = mysqli_query($con, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
<title>Display data</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
if(mysqli_num_rows($result) > 0){

?>
<table border="1">
<tr>
<th>ID</th>
<th>User</th>
<th>Email</th>
<th>password</th>
</tr>

<!-- start while loop -->
<?php
$i=0;
while($row = mysqli_fetch_array($result)){

?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["myUser"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["pass"]; ?></td>
</tr>
<?php

$i++;
}
?>
<!-- end while loop -->
</table>

<?php
}

else{
    echo "No result found";
}
?>
<!-- End of if statement -->
</body>
</html>
