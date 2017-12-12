<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$member_pasien = $_POST['member_pasien'];
	$tanggal_daftar = date("Y-m-d H:i:s");
	$nama_pasien = $_POST['nama_pasien'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$usia_pasien = $_POST['usia_pasien'];
	$pekerjaan_pasien = $_POST['pekerjaan_pasien'];
	$alamat_pasien = $_POST['alamat_pasien'];
	$telp_pasien = $_POST['telp_pasien'];
	$alergi = $_POST['alergi'];

	$query = "INSERT INTO data_pasien (member_pasien, tanggal_daftar, nama_pasien, jenis_kelamin, usia_pasien, pekerjaan_pasien, alamat_pasien, telp_pasien, alergi)
				VALUES ('$member_pasien', '$tanggal_daftar', '$nama_pasien', '$jenis_kelamin', '$usia_pasien', '$pekerjaan_pasien', '$alamat_pasien', '$telp_pasien', '$alergi')";
	$data = mysqli_query($con,$query);

	if ($data){
?>
	<script> document.location.href='halaman_depan_pegawai.php';</script>
<?php
	}
	else {
?>
	<script language="javascript">alert("gagal");</script>
	<script> document.location.href='data_pasien.php';</script>
<?php
	}
	mysqli_close($con);
?>
