<?php

include 'dbconnect.php';

if(count($_POST)>0) {

mysqli_query($db,"UPDATE employees set userid='" . $_POST['userid'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");

echo '<script>alert("Record Modified Successfully!");</script>'; 

//Prompts the user

echo '<script>window.location.assign("display.php");</script>';

}

$result = mysqli_query($db,"SELECT * FROM employees WHERE userid='" . $_GET['userid'] . "'");

$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<head>
<title>Form Add Data</title>
<meta charset = "UTF-8">
</head>
<body>
<h1> Add Data </h1>
<form name = "frmUser" method = "post" action ="">
	Username: <br>
    <input type ="hidden" name="userid" class="textfield" value= "<?php echo $row['userid']; ?>">
    <br>
    first name: <br>
    <input type="text" name="first_name" class="textfield" value="<?php echo $row['first_name']; ?>">
    <br>

    last name: <br>
    <input type="text" name="last_name" class="textfield" value="<?php echo $row['last_name']; ?>">
    <br>
    city: <br>
    <input type="text" name="city_name" class="textfield" value="<?php echo $row['city_name']; ?>">
    <br>
    Email: <br>
    <input type="text" name="email" class="textfield" value="<?php echo $row['email']; ?>">
    <br>

    <input type="submit" name="submit" value="submit" class="button">
</form>
</body>
</html>