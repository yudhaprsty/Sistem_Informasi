<?php
	include 'connect.php';

	$id_riwayat = $_SESSION['id_riwayat'];
	$sql_delete = "DELETE FROM riwayat WHERE id_riwayat = '$id_riwayat'";

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
		<script> document.location.href='daftar_riwayat_treatment.php';</script>
<?php
		}
		else {
?>
		<script> document.location.href='daftar_riwayat_treatment_pegawai.php';</script>
<?php
		}
	}
	mysqli_close($con);
?>
