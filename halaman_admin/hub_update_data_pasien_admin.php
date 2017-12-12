<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$id_pasien = $_SESSION['id_pasien'];
	$member_pasien = $_POST['member_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$usia_pasien = $_POST['usia_pasien'];
	$pekerjaan_pasien = $_POST['pekerjaan_pasien'];
	$alamat_pasien = $_POST['alamat_pasien'];
	$telp_pasien = $_POST['telp_pasien'];
	$alergi = $_POST['alergi'];

	$sql = mysqli_query($con, "UPDATE data_pasien SET member_pasien='$member_pasien', nama_pasien='$nama_pasien', jenis_kelamin='$jenis_kelamin', usia_pasien='$usia_pasien',
											pekerjaan_pasien='$pekerjaan_pasien', alamat_pasien='$alamat_pasien', telp_pasien='$telp_pasien', alergi='$alergi' WHERE id_pasien = '$id_pasien'");
				
		if($sql) {
?>
		<script> document.location.href='daftar_pasien.php';</script>
<?php
		}
		else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='daftar_pasien.php';</script>
<?php
		}
	mysqli_close($con);

?>
