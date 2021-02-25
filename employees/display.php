<?php
include 'dbconnect.php';
$result = mysqli_query($db, "SELECT * FROM employees");
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Data</title>
<meta charset = "UTF-8">
<link rel = "stylesheet" href = "style.css">
</head>
<body>
<?php
if(mysqli_num_rows($result) > 0 ){
?>
<h1>Display Data</h1>
<a href = "addform.php"> Add Data </a>
<a href = "updateform.php"> Update Data </a>
<a href = "deleteform.php"> Delete Data </a>

<table border = "1">

<tr>
	<th> User ID </th>
	<th> First Name </th>
	<th> Last Name </th>
	<th> City </th>
	<th> Email </th>
	
</tr>

<?php
$i = 0;
while($row = mysqli_fetch_array($result)){
?>

<tr>
	<td><?php echo $row["userid"]; ?></td>
	<td><?php echo $row["first_name"]; ?></td>
	<td><?php echo $row["last_name"]; ?></td>
	<td><?php echo $row["city_name"]; ?></td>
	<td><a href = 'mailto:<?php echo $row["email"]; ?>'> 
	<?php echo $row["email"]; ?> </a> </td>
	
</tr>
<?php
$i++;
}
?>
</table>
<?php 
}
else{
	echo "No result found";
}
?>
</body>
</html>