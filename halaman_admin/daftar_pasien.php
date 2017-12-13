<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
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
	<!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
				<div class="page-title">
					<div class="title_left">
						<h3></h3>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar Pasien</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No. Member</th>
											<th>Nama Pasien</th>
											<th>Jenis Kelamin</th>
											<th>Usia Pasien</th>
											<th>Pekerjaan Pasien</th>
											<th>Alamat</th>
											<th>No. Telepon</th>
											<th>Alergi</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM data_pasien";
											$result = $con->query($sql);

											if($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													echo "<tr>
															<td>".$row['member_pasien']."</td>
															<td>".$row['nama_pasien']."</td>
															<td>".$row['jenis_kelamin']."</td>
															<td>".$row['usia_pasien']."</td>
															<td>".$row['pekerjaan_pasien']."</td>
															<td>".$row['alamat_pasien']."</td>
															<td>".$row['telp_pasien']."</td>
															<td>".$row['alergi']."</td>
															<td>
																<a href='pendaftaran_treatment.php?id_pasien=".$row['id_pasien']."'><button type='button' class='btn btn-dark'>Tambah Treatment</button></a>
																</br>
																<a href='halaman_edit_data_pasien_admin.php?id_pasien=".$row['id_pasien']."'><button type='button' class='btn btn-info'>Edit</button></a>
																<a href='delete_data_pasien.php?id_pasien=".$row['id_pasien']."'><button type='button' class='btn btn-danger'>Delete</button></a>
															</td>
														</tr>";
													}
												}
											else {
												echo "<tr><td colspan='9'><center>No Data Avaliable</center></td></tr>";
											}
										?>
									</tbody>
                </table>
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
	<!-- Datatables -->
	<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="../vendors/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
</body>

</html>
