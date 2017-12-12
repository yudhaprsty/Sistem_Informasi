<?php
	include 'connect.php';

	$id_pasien = $_SESSION['id_pasien'];
	$sql_delete = "DELETE FROM data_pasien WHERE id_pasien = '$id_pasien'";

	if (mysqli_query($con, $sql_delete)){
?>

<?php
		$id = $_SESSION['id'];
		$query2 = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query2);
		$author = $result['status_id'];
		if($author == 1)
		{
?>
		<script> document.location.href='daftar_pasien.php';</script>
<?php
		}
		else {
?>
		<script> document.location.href='halaman_depan_pegawai.php';</script>
<?php
		}
	}
	mysqli_close($con);
?>
