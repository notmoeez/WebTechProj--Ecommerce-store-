<?php 
require('conForLogin.php');

session_start();

$sql="TRUNCATE TABLE `cart`;";
$result1=mysqli_query($conn,$sql);
$sql2="TRUNCATE TABLE `wishlist`;";
$result2=mysqli_query($conn,$sql2);


session_destroy();

header("Location: login.php");

?>