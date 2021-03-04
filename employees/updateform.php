<?php 

include 'dbconnect.php'; 

$result = mysqli_query($db,"SELECT * FROM employees"); 

?> 

<!DOCTYPE html>

<html> 

	<head> 

		<title>Update data</title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="style.css"> 

	</head> 

<body> 



<?php 

if (mysqli_num_rows($result) > 0) { 

?>  



<h1>Update Data</h1> 

<table> 

	<tr> 

		<th>User Id</th> 

		<th>First Name</th> 

		<th>Last Name</th> 

		<th>City</th> 

		<th>Email</th> 

		<th>Action</th> 

	</tr> 

		<?php 

		$i=0; 

		while($row = mysqli_fetch_array($result)) { 

		?>

	<tr> 

		<td><?php echo $row["userid"]; ?></td> 

		<td><?php echo $row["first_name"]; ?></td> 

		<td><?php echo $row["last_name"]; ?></td> 

		<td><?php echo $row["city_name"]; ?></td> 

		<td><?php echo $row["email"]; ?></td> 

		<td><a href="update.php?userid=<?php echo $row["userid"]; ?>" 

		>Update</a></td> 

	</tr> 

		<?php 

		$i++;

		}?>

</table>

<?php

}

else

{

	echo "no result found";

}

?>

 </body>

</html>
