<!-- 
Username: cdhucilJG9
Database name: cdhucilJG9
Password: li9DNSP7AK
Server: remotemysql.com
Port: 3306 -->

<?php

$user = "cdhucilJG9";
$dbName = "cdhucilJG9";
$dbpass = "li9DNSP7AK";
$dbServer = "remotemysql.com";
$port = 3306;

$db = mysqli_connect($dbServer, $user, $dbpass, $dbName);

// Check connection

if (mysqli_connect_error())

 {

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }