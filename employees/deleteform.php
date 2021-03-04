<?php
include 'dbconnect.php';
$result = mysqli_query($db, "SELECT * FROM employees");
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete employee data</title>
<meta charset = "UTF-8">
<link rel = "stylesheet" href = "style.css">
</head>
<body>
<h1>Delete employee data</h1>
<table>
<tr>
	<th> User ID </th>
	<th> First Name </th>
	<th> Last Name </th>
	<th> City </th>
	<th> Email </th>
	<th> Action </th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)){
	?>
	<tr class = "<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["userid"];?></td>
	<td><?php echo $row["first_name"];?></td>
	<td><?php echo $row["last_name"];?></td>
	<td><?php echo $row["city_name"];?></td>
	<td><?php echo $row["email"];?></td>
	<?php echo '<td><a href="#" onclick="myFunction('.$row['userid'].')">Delete</a> </td>';?>
	</tr>
	<?php
	$i++;
}
?>
</table>
<script>
function myFunction(userid){
	var r = confirm("Are you sure you want to delete this record?");
	if(r==true)
	{
		window.location.assign("delete.php?userid=" + userid);
	}
}
</script>
</body>
</html>