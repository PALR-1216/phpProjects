<?php
$hostname = 'remotemysql.com';
$username='RVoSsr8Wnx'; 
$password='2KKGHkbpC2'; 
$dbname='RVoSsr8Wnx'; 

$con = new mysqli($hostname, $username, $password, $dbname);

if($con-> connect_errno){
    trigger_error('database connection failed: ' . $con->connect_error);
}

else{
    
}
?>