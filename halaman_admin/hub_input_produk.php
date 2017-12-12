<?php
	include 'connect.php';

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$jenisper = $_POST['jenis_perawatan'];
	$namaper = $_POST['nama_perawatan'];
	$harga = $_POST['harga_perawatan'];

	$query = "INSERT INTO daftar_harga (id_produk ,jenis_perawatan, nama_perawatan, harga_perawatan) VALUES ('','$jenisper','$namaper', '$harga')";
	$data = mysqli_query($con, $query);

	if ($data){
?>
	<script> document.location.href='daftar_harga.php';</script>
<?php
	}
	else {
?>
	<script language="javascript">alert("gagal");</script>
	<script> document.location.href='input_produk.php';</script>
<?php
	}
	mysqli_close($con);
?>
