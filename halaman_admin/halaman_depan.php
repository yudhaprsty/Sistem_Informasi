<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
	$tanggal = getdate();
	$tahun = $tanggal['year'];

	$usia11 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='1' ");
	$usia21 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='1'");
	$usia31 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='1'");

	$usia12 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='2' ");
	$usia22 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='2'");
	$usia32 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='2'");

	$usia13 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='3' ");
	$usia23 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='3'");
	$usia33 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='3'");

	$usia14 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='4' ");
	$usia24 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='4'");
	$usia34 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='4'");

	$usia15 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='5' ");
	$usia25 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='5'");
	$usia35 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='5'");

	$usia16 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='6' ");
	$usia26 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='6'");
	$usia36 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='6'");

	$usia17 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='7' ");
	$usia27 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='7'");
	$usia37 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='7'");

	$usia18 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='8' ");
	$usia28 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='8'");
	$usia38 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='8'");

	$usia19 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='9' ");
	$usia29 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='9'");
	$usia39 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='9'");

	$usia110 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='10' ");
	$usia210 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='10'");
	$usia310 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='10'");

	$usia111 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='11' ");
	$usia211 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='11'");
	$usia311 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='11'");

	$usia112 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='12' ");
	$usia212 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='12'");
	$usia312 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='12'");

	$jumlah_usia11 = mysqli_num_rows($usia11);
	$jumlah_usia21 = mysqli_num_rows($usia21);
	$jumlah_usia31 = mysqli_num_rows($usia31);

	$jumlah_usia12 = mysqli_num_rows($usia12);
	$jumlah_usia22 = mysqli_num_rows($usia22);
	$jumlah_usia32 = mysqli_num_rows($usia32);

	$jumlah_usia13 = mysqli_num_rows($usia13);
	$jumlah_usia23 = mysqli_num_rows($usia23);
	$jumlah_usia33 = mysqli_num_rows($usia33);

	$jumlah_usia14 = mysqli_num_rows($usia14);
	$jumlah_usia24 = mysqli_num_rows($usia24);
	$jumlah_usia34 = mysqli_num_rows($usia34);

	$jumlah_usia15 = mysqli_num_rows($usia15);
	$jumlah_usia25 = mysqli_num_rows($usia25);
	$jumlah_usia35 = mysqli_num_rows($usia35);

	$jumlah_usia16 = mysqli_num_rows($usia16);
	$jumlah_usia26 = mysqli_num_rows($usia26);
	$jumlah_usia36 = mysqli_num_rows($usia36);

	$jumlah_usia17 = mysqli_num_rows($usia17);
	$jumlah_usia27 = mysqli_num_rows($usia27);
	$jumlah_usia37 = mysqli_num_rows($usia37);

	$jumlah_usia18 = mysqli_num_rows($usia18);
	$jumlah_usia28 = mysqli_num_rows($usia28);
	$jumlah_usia38 = mysqli_num_rows($usia38);

	$jumlah_usia19 = mysqli_num_rows($usia19);
	$jumlah_usia29 = mysqli_num_rows($usia29);
	$jumlah_usia39 = mysqli_num_rows($usia39);

	$jumlah_usia110 = mysqli_num_rows($usia110);
	$jumlah_usia210 = mysqli_num_rows($usia210);
	$jumlah_usia310 = mysqli_num_rows($usia310);

	$jumlah_usia111 = mysqli_num_rows($usia111);
	$jumlah_usia211 = mysqli_num_rows($usia211);
	$jumlah_usia311 = mysqli_num_rows($usia311);

	$jumlah_usia112 = mysqli_num_rows($usia112);
	$jumlah_usia212 = mysqli_num_rows($usia212);
	$jumlah_usia312 = mysqli_num_rows($usia312);
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
	<script type="text/javascript" src="js/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Usia', 'Usia <20', 'Usia >20 & <50', 'Usia >50'],
        ['Jan', <?php echo $jumlah_usia11; ?>,  <?php echo $jumlah_usia21; ?>, <?php echo $jumlah_usia31; ?>],
				['Feb', <?php echo $jumlah_usia12; ?>,  <?php echo $jumlah_usia22; ?>, <?php echo $jumlah_usia32; ?>],
				['Mar', <?php echo $jumlah_usia13; ?>,  <?php echo $jumlah_usia23; ?>, <?php echo $jumlah_usia33; ?>],
				['Apr', <?php echo $jumlah_usia14; ?>,  <?php echo $jumlah_usia24; ?>, <?php echo $jumlah_usia34; ?>],
				['Mei', <?php echo $jumlah_usia15; ?>,  <?php echo $jumlah_usia25; ?>, <?php echo $jumlah_usia35; ?>],
				['Jun', <?php echo $jumlah_usia16; ?>,  <?php echo $jumlah_usia26; ?>, <?php echo $jumlah_usia36; ?>],
				['Jul', <?php echo $jumlah_usia17; ?>,  <?php echo $jumlah_usia27; ?>, <?php echo $jumlah_usia37; ?>],
				['Aug', <?php echo $jumlah_usia18; ?>,  <?php echo $jumlah_usia28; ?>, <?php echo $jumlah_usia38; ?>],
				['Sep', <?php echo $jumlah_usia19; ?>,  <?php echo $jumlah_usia29; ?>, <?php echo $jumlah_usia39; ?>],
				['Okt', <?php echo $jumlah_usia110; ?>,  <?php echo $jumlah_usia210; ?>, <?php echo $jumlah_usia310; ?>],
				['Nov', <?php echo $jumlah_usia111; ?>,  <?php echo $jumlah_usia211; ?>, <?php echo $jumlah_usia311; ?>],
				['Des', <?php echo $jumlah_usia112; ?>,  <?php echo $jumlah_usia212; ?>, <?php echo $jumlah_usia312; ?>],
      ]);

      var options = {
        chart: {
          title: 'Grafik Usia Pasien',
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
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

				<!-- top tiles -->
				<div class="row tile_count">
					<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i> Total Pasien</span>
						<div class="count"><?php $query1 = mysqli_query($con, "SELECT * FROM data_pasien ");
									$jumlah = mysqli_num_rows($query1); echo "$jumlah";?></div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							<span class="count_top"><i class="fa fa-clock-o"></i> Total Pendapatan</span>
						<div class="count">123.50</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
					</div>
				</div>
				<!-- /top tiles -->

				<div id="columnchart_material" style="width:990px; height: 500px;"></div>
				</br>
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
