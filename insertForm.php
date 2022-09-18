<?php
require('conForLogin.php');
if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $sql = "INSERT INTO `product`(`item_brand`,`item_name`,`item_price`,`item_image`,`item_register`) VALUES('$brand','$product','$price','$img',NOW())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:admin.php");
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert - Admin</title>
</head>

<body>

    <div class="container">
        <h3 class="text-center mt-5">New product details</h3>
        <form method="post" class="border border-dark rounded p-5 mt-5">
            <div class="mb-3">
                <label for="brand" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter brand name">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product" id="product" placeholder="Enter product name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter product price">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Image</label>
                <input type="text" class="form-control" name="img" id="img" placeholder="Enter image location">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container d-flex justify-content-center">
        <a class="m-5" href="admin.php">
            <button class="btn btn-danger">
                Go back
            </button>

        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>