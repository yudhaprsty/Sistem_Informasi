<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
?>
	<script> document.location.href='halaman_depan_pegawai.php';</script>
<?php
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Adivaa Klinik</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
		<a class="hiddenanchor" id="signup"></a>
		<a class="hiddenanchor" id="signin"></a>
		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form action="hub_masuk.php" method="POST">
						<h1>Login Form</h1>
						<div>
							<input type="text" class="form-control" placeholder="Username" required="" name="username"/>
						</div>
						<div>
							<input type="password" class="form-control" placeholder="Password" required="" name="password"/>
						</div>
						<div>
							<input class="btn btn-default submit" type="submit" value="Log in">
						</div>
						<div class="clearfix"></div>
						<div class="separator">
							<div>
								<img src="images/Logo Adivaa.png" height="80px" widht="80px">
								<p>©2016 All Rights Reserved. Adivaa Skin Care Clinic</p>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
    </div>
</body>

</html>
