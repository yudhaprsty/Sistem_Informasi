<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$id_produk = $_SESSION['id_produk'];
	$jenis_perawatan = $_POST['jenis_perawatan'];
	$nama_perawatan = $_POST['nama_perawatan'];
	$harga_perawatan = $_POST['harga_perawatan'];

	$sql = mysqli_query($con, "UPDATE daftar_harga SET jenis_perawatan='$jenis_perawatan', nama_perawatan='$nama_perawatan', harga_perawatan='$harga_perawatan' WHERE id_produk = '$id_produk'");

		if($sql) {
?>
		<script> document.location.href='daftar_harga.php';</script>
<?php
		}
		else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='daftar_harga.php';</script>
<?php
		}
	mysqli_close($con);

?>
