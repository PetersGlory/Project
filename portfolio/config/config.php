<?php
error_reporting("E_RROR");
$server = "sql109.hstn.me";
$user = "mseet_28106822";
$pass = "Peter2200";
$db = "mseet_28106822_portfolio";

$con = mysqli_connect($server, $user, $pass, $db);

if(!conn){
    echo "connection failed";
}

?>