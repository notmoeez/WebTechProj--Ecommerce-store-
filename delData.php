<?php
require('conForLogin.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `product` WHERE item_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:admin.php");
    } else {
        echo mysqli_error($conn);
    }
}
