<?php
$username = "Yi04MEwxxs";
$dbName = "Yi04MEwxxs";
$dbPassword = "2YI06v32bf";
$dbServer = "remotemysql.com";
$port = "3306";

$db = mysqli_connect($dbServer, $username, $dbPassword, $dbName);


if($db -> connect_errno){
    trigger_error("database failed to connect" . $db -> connect_error);
}

else{
    //

}


?>