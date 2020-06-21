<?php 

$servername = "localhost";
$dbusername="root";
$dbpassword ="";
$dbname = "ahmed-login";

$concc = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$concc){
    die("Connection failed :" .mysql_connect_error());
}