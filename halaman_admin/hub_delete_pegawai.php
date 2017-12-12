<?php
	include 'connect.php';

	$id = $_SESSION['id_hapus'];
	$sql_delete = "DELETE FROM user WHERE id = '$id'";

	if (mysqli_query($con, $sql_delete)){
?>
		<script> document.location.href='daftar_pegawai.php';</script>
<?php
	}
	mysqli_close($con);
?>
