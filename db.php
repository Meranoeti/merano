<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_registration";
$conn = mysqli_connect($hostNam,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("Something went wrong please try again;");
}

?>