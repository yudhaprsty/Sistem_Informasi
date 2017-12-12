<?php
	include 'connect.php';

	if($_SESSION['status'] == "nouser"){
        header('Location:/halaman_login.php');
    }

	else {
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
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
						<a href="halaman_depan.php" class="site_title"><img src="images/Logo Adivaa.png" height="60px" widht="60px"></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?php echo $result['foto_profil']?>" alt="..." class="img-circle profile_img" width="50" height="50">
						</div>
						<div class="profile_info">
							<span>Admin</span>
							<h2><?php echo $result['nama']?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br/>

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="halaman_depan.php">Dashboard</a></li>
										<li><a href="profil_admin.php">Profil Admin</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daftar_pasien.php">Daftar Pasien</a></li>
										<li><a href="daftar_riwayat_treatment.php">Daftar Riwayat Treatment</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Pegawai <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daftar_pegawai.php">Daftar Pegawai</a></li>
										<li><a href="pendaftaran_pegawai.php">Pendaftaran Pegawai</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Pendapatan <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="detail_pendapatan.php">Detail Pendapatan</a></li>
										<li><a href="grafik_pendapatan.php">Grafik Pendapatan</a></li>
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
				<div class="row">

      		<!-- Column -->
          <div class="col-lg-4 col-xlg-3 col-md-5">
          	<div class="card">
              <div class="card-block">
                <center class="m-t-30">
									<?php
										if($result['foto_profil'] == ""){
											echo "<img src='images/picture.jpg' class='img-circle' width='150' height='150'>";
										} else{
											echo "<img src=".$result['foto_profil']." class='img-circle' width='150' height='150'>";
										}
									?>
                  <form action="hub_update_foto_admin.php" name="uploader" method="post" enctype="multipart/form-data">
										<div class="container" style="margin-right: 90px;">
											<input class="w3-input w3-border" type="file" name="photobaru" required=""></br>
											<button class="btn btn-success" type="submit"> Unggah </button>
										</div>
									</form>
                </center>
              </div>
            </div>
          </div>
          <!-- Column -->

          <!-- Column -->
          <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
              <div class="card-block">
								<?php
									if(($_SESSION['status'] == "user")) {
								?>
                <form class="form-horizontal form-material" action="hub_edit_admin.php" method="post">
									<div class="form-group">
	                  <label class="col-md-12">Nama</label>
	                  <div class="col-md-12">
	                      <input type="text"  name="nama" value="<?php echo $result['nama']; ?>" class="form-control form-control-line">
	                  </div>
                  </div>
									<div class="form-group">
                    <label class="col-md-12">Tanggal Lahir</label>
                    <div class="col-md-12">
                        <input type="date" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir']; ?>" class="form-control form-control-line">
                    </div>
                	</div>
                	<div class="form-group">
                      <label class="col-md-12">Usia</label>
                      <div class="col-md-12">
                          <input type="number" name="usia" value="<?php echo $result['usia']; ?>" class="form-control form-control-line">
                      </div>
                  </div>
									<div class="form-group">
                    <label class="col-md-12">Alamat</label>
                    <div class="col-md-12">
                        <input type="text" name="alamat" value="<?php echo $result['alamat']; ?>" class="form-control form-control-line">
                    </div>
                	</div>
                	<div class="form-group">
                    <label class="col-md-12">Nomor Telepon</label>
                    <div class="col-md-12">
                        <input type="text" name="no_telp" value="<?php echo $result['no_telp']; ?>" class="form-control form-control-line">
                    </div>
                	</div>
									<div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success" name="update" value="Save">Update Profile</button>
                    </div>
                	</div>
            		</form>
								<?php
									}
								?>
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
