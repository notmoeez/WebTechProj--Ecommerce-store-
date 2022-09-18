<?php

require('conForLogin.php');

session_start();

// error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$userName = $_POST['userName'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM accounts WHERE user_name='$userName' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['user_name'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

//for user phone number
if (isset($_POST['phone'])) {
	$user=$_POST['user'];
	$sql="SELECT 'phone' FROM `accounts` WHERE 'user_name'='$user';";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
    echo $row['phone'];
    if (($phone == $row['phone'])) {
		$_SESSION['username'] = $user;
        header("Location:index.php");
    } else {
       echo "<script> alert('Incorrect phone number !'); </script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="loginStyle.css">

	<title>Login Form - Mobile Senpai</title>
</head>

<body>

	<div class="container">
		<h2 class="text-center border-bottom pb-3">Mobile Senpai</h2>
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="userName" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Forgotten password? <button type="button" class="btn btn-body text-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click here.
				</button></p>
			<p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
			<p class="login-register-text">For Admin Login <a href="adminLogin.php">Click Here</a>.</p>
		</form>
	</div>


	<!-- Modal -->
	<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Enter following details</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post">
					<div class="mb-3">
							<label for="user" class="form-label">Username</label>
							<input type="text" class="form-control" name="user" placeholder="Username">
						</div>
						<div class="mb-3">
							<label for="no" class="form-label">Phone Number</label>
							<input type="text" class="form-control" name="no" placeholder="+92">
						</div>
						<button type="submit" name="phone" class="btn btn-primary">Submit</button>
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