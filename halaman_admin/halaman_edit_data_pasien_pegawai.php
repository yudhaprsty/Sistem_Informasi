<?php
	include 'connect.php';

	if($_SESSION['status'] == "nouser"){
        header('Location:/halaman_login.php');
    }

	else {
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
		$id_pasien = $_GET['id_pasien'];
		$_SESSION['id_pasien'] = $id_pasien;
		$query_pasien = mysqli_query($con, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'");
		$result_pasien = mysqli_fetch_array($query_pasien, MYSQLI_ASSOC);
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
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="halaman_depan_pegawai.php" class="site_title"><i class="fa fa-paw"></i> <span>Adivaa Klinik</span></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?php echo $result['foto_profil']?>" alt="..." class="img-circle profile_img" width="50" height="50">
						</div>
						<div class="profile_info">
							<span>Pegawai</span>
							<h2><?php echo $result['nama']?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br/>

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i>Home<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="halaman_depan_pegawai.php">Dashboard</a></li>
										<li><a href="profil_pegawai.php">Profil Pegawai</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i>Pasien<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="pendaftaran_pasien.php">Pendaftaran Pasien</a></li>
										<li><a href="daftar_riwayat_treatment_pegawai.php">Daftar Riwayat Treatment</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Treatment <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daftar_harga.php">Daftar Harga</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo $result['foto_profil']?>" alt="" width="20" height="20"><?php echo $result['nama']?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="hub_keluar.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Pasien</h3>
						</div>
						<div class="title_right">
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_content">
									<form class="form-horizontal form-label-left" action="hub_update_data_pasien.php" method="post">
										<span class="section">Data Pasien</span>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Member
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $result_pasien['member_pasien'];?>" name="member_pasien">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pasien
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $result_pasien['nama_pasien'];?>" name="nama_pasien">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <select name="jenis_kelamin" class="form-control btn btn-default dropdown-toggle">
												<option value="<?php echo $result_pasien['jenis_kelamin'];?>"><?php echo $result_pasien['jenis_kelamin'];?></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											  </select>
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Usia Pasien
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="number" value="<?php echo $result_pasien['usia_pasien'];?>" name="usia_pasien">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Pasien
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <select name="pekerjaan_pasien" class="form-control btn btn-default dropdown-toggle">
												<option value="<?php echo $result_pasien['pekerjaan_pasien'];?>"><?php echo $result_pasien['pekerjaan_pasien'];?></option>
												<option value="Mahasiswi">Mahasiswi</option>
												<option value="Dosen">Dosen</option>
												<option value="Guru">Guru</option>
												<option value="PNS">PNS</option>
												<option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
												<option value="Lainnya">Lainnya</option>
											  </select>
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">Alamat
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $result_pasien['alamat_pasien'];?>" name="alamat_pasien">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $result_pasien['telp_pasien'];?>" name="telp_pasien">
											</div>
										</div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Alergi
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <input class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $result_pasien['alergi'];?>" name="alergi">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-3">
											  <button type="submit" class="btn btn-primary">Cancel</button>
											  <button id="send" type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Adivaa Skin Care Clinic
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

		</div>
	</div>

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="../vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="../vendors/Flot/jquery.flot.js"></script>
	<script src="../vendors/Flot/jquery.flot.pie.js"></script>
	<script src="../vendors/Flot/jquery.flot.time.js"></script>
	<script src="../vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="../vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
</body>

</html>
<?php
	}
?>
