<?php
	include 'connect.php';

	$id_produk = $_SESSION['id_produk'];
	$sql_delete = "DELETE FROM daftar_harga WHERE id_produk = '$id_produk'";

	if (mysqli_query($con, $sql_delete)){
?>
		<script> document.location.href='daftar_harga.php';</script>
<?php
	}
	mysqli_close($con);
?>
