
<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$database = "juices";
$con = mysqli_connect($hostname,$user,$pass,$database);
if(!$con){
    echo 'not connected to database ';
}
?>