<?php

session_start();

require '../../config/functions.php';

if (isset($_POST['login'])) {
	if (empty($_POST['username']) && empty($_POST['password'])) {

?>
		<script>
			alert('Masukan Username & Password');
			document.location.href = 'login.php';
		</script>
	<?php

	}
	$password = md5($_POST['password']);
	$admin = $conn->query("SELECT * FROM user WHERE username = '$_POST[username]' && password = '$password' ");

	if (mysqli_num_rows($admin) > 0) {
		$result = mysqli_fetch_assoc($admin);
		$_SESSION['id'] = $result['id'];
	?>
		<script>
			alert('Selamat Anda Berhasil Login!');
			document.location.href = '../admin.php';
		</script>
	<?php


	} else {

	?>
		<script>
			alert('Masukkan Username & Password yang benar!');
		</script>
<?php
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>SISIPAN LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logosisipanungu.png" alt="IMG">
				</div>

				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						SISIPAN LOGIN 
					</span>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Masukan
						</span>
						<a class="txt2" href="#">
							Username / Password Yang BENAR !
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Selamat Datang
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>