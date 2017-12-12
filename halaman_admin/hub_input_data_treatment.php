<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$tanggal_dateng = date("Y-m-d H:i:s");
	$id_pasien = $_SESSION['id_pasien'];
	$member = $_POST['member_pasien'];
	$nama = $_POST['nama_pasien'];
	$riwayat_perawatan = $_POST['riwayat_perawatan'];
	$jenis_perawatan = $_POST['jenis_perawatan'];
	$biaya_perawatan = $_POST['biaya_perawatan'];

	$query = "INSERT INTO riwayat (tanggal_dateng, id_pasien, member_pasien, nama_pasien, riwayat_perawatan, jenis_perawatan, biaya_perawatan)
						VALUES ('$tanggal_dateng', '$id_pasien', '$member', '$nama', '$riwayat_perawatan', '$jenis_perawatan', '$biaya_perawatan')";
	$data = mysqli_query($con,$query);

	if ($data){
?>
	<script> document.location.href='daftar_riwayat_treatment.php';</script>
<?php
	}
	else {
?>
	<script language="javascript">alert("gagal");</script>
	<script> document.location.href='daftar_pasien.php';</script>
<?php
	}
	mysqli_close($con);
?>
