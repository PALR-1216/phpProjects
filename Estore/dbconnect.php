<?php

$db = mysqli_connect("localhost","root", "root","chic");

// Check connection

if (mysqli_connect_errno())

 {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }

?>