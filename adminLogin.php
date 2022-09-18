<?php
require('conForLogin.php');
$error = "";

//for admin login
if (isset($_POST['submit'])) {
    $username = "moezxx";
    $password = "umt123";
    if (($username == $_POST['user']) && ($password == $_POST['pass'])) {
        header("Location:admin.php");
    } else {
        $error = "Incorrect username or password";
    }
}

//for admin phone number
$error2 = "";
if (isset($_POST['phone'])) {
    $phone = "03334282424";
    if (($phone == $_POST['no'])) {
        header("Location:admin.php");
    } else {
       echo "<script> alert('Incorrect phone number !'); </script>";
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

    <title>Admin Login - Mobile Senpai</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .myBg {
            background-color: #a29bfe;
        }

        @media only screen and (max-width: 850px) {
            .container {
                width: 70% !important;
            }
        }
    </style>
</head>

<body class="myBg">

    <div class="container w-25">
        <h2 class="text-center mt-5 text-white">Admin Login</h2>
        <form method="post" class="bg-white border border-dark rounded p-5 mt-5">
            <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary d-block my-3">Login</button>
            <?php echo "<span class='text-danger'>{$error}</span>" ?>

            <button type="button" class="btn btn-body" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Forgotten password? Click here.
            </button>

        </form>
    </div>

    <div class="container d-flex justify-content-center">

        <a class="m-5" href="login.php">
            <button class="btn btn-danger">
                Go back
            </button>

        </a>

    </div>



    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your phone number</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="no" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="no" placeholder="+92">
                        </div>
                        <button type="submit" name="phone" class="btn btn-primary">Submit</button>
                        <?php echo "<span class='text-danger'>{$error2}</span>" ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>