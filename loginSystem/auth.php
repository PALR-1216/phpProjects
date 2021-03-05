<?php

include 'dbconnect.php';

$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];

$username = stripcslashes($username);
$password = stripslashes($password);
$email = stripcslashes($email);

$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
$email = mysqli_real_escape_string($con,$email);

$sql = "select * from users where myUser = '$username' and pass = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    echo "<h1><center> Login Succesfully welcome: $username</center></h1>";
}

else{
    echo "invalid user";
}

?>