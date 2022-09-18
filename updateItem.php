<?php
require('conForLogin.php');
$id = $_GET['updateid'];
$sql = "SELECT * FROM `product` WHERE `item_id`='$id';";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$brand_name = $row['item_brand'];
$prod_name = $row['item_name'];
$prod_price = $row['item_price'];
$image = $row['item_image'];
if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    $sql = "UPDATE `product` set `item_brand`='$brand', item_name='$product', `item_price`='$price' ,`item_image`='$img' WHERE `item_id`='$id';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Updated succesfully";
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
                <input type="text" class="form-control" name="brand" id="brand" value="<?php echo $brand_name ?>">
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product" id="product" value="<?php echo $prod_name ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="<?php echo $prod_price ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Image</label>
                <input type="text" class="form-control" name="img" id="img" value="<?php echo $image ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
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