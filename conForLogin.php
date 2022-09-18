<?php 

$server = "localhost";
$user = "root";
$pass = "mysql";
$database = "mobile_senpai";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>