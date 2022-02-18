<!-- DIMOHON UNTUK TIDAK MENGUBAH HALAMAN INI TANPA IZIN -->

<?php session_start();
require 'koneksi.php';
if (isset($_POST['login'])) {

	$username	= $_POST['username'];
	$pass		= $_POST['pass'];

	$result	= mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($pass, $row["password"])) {
			// set session
			$_SESSION["login"] = true;
			header("Location: admin/index.php");
			exit;
		}
	}

	echo "<script>alert('Username/Password salah!');</script>";
}

// if ( $row === 1 ){
// 	//prosedur seleksi password dijalankan 
// 	$fecth_pass 	= mysqli_fetch_assoc($result);
// 	$cek_pass		= $fecth_pass['password'];

// 	if( $cek_pass <> $pass ){
// 		echo"<script>alert('Password Salah');</script>";
// 	}else{
// 		echo"<script>alert('Login Berhasil');document.location.href='admin/index.php'</script>";
// 		$_SESSION['log'] = false; //variable super global 
// 	} 
// }else{
// 	echo"<script>alert('Username salah atau belum terdaftar');</script>";
// }


/*if (array_key_exists('forget', $_POST)){
	echo "<script>
	alert('Fitur ini masih dikembangkan')
	</script>";
		}*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Universitas Bung Karno</title>
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
					<img src="images/img-ubk.png" alt="Logo Ubk">
				</div>



				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Masuk
					</span> 

					<div class="wrap-input100 validate-input" data-validate="Username dibutuhkan">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<button class="txt2" type="submit" name="forget">
							Username / Password?
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Buat Akun Baru
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<?php

				?>
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