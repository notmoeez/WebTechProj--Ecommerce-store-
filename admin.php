<?php
require('conForLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        a{
            text-decoration: none;
            color: white;
        }
    </style>
    <title>Admin - Mobile Senpai</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">ADMIN PANEL</h2>
        <h3 class="text-black-50 text-center border-bottom pb-3">Product List</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Added on</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `product`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['item_id'];
                        $brand = $row['item_brand'];
                        $product = $row['item_name'];
                        $price = $row['item_price'];
                        $date = $row['item_register'];
                        echo '<tr>
                     <th scope="row">' . $id . '</th>
                     <td>' . $brand . '</td>
                     <td>' . $product . '</td>
                     <td>' . $price . '</td>
                     <td>' . $date . '</td>
                     <td>
                     <button class="btn btn-warning"><a href="updateItem.php?updateid='.$id.'">Update</a></button>
                     <button class="btn btn-danger"><a href="delData.php?deleteid='.$id.'">Delete</a></button>
                 </td>
                     </tr>';
                    }
                }

                ?>
               

            </tbody>
        </table>
        <div class="container d-flex justify-content-center">
            <a class="m-5" href="insertForm.php">
                <button class="btn btn-primary">
                    Add new product
                </button>

            </a>

        </div>
        <div class="container d-flex justify-content-center">
        <a class="m-2" href="adminLogin.php">
            <button class="btn btn-danger">
                Log out
            </button>

        </a>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>