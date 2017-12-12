<?php
	include 'connect.php';

	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	if(($_SESSION['status'] == "user")) {
		$name = $_POST['nama'];
		$tgl = $_POST['tanggal_lahir'];
		$usia = $_POST['usia'];
		$alamat = $_POST['alamat'];
		$notel = $_POST['no_telp'];
		

		$query4= mysqli_query($con, "UPDATE user SET nama='$name', tanggal_lahir='$tgl', usia='$usia', alamat='$alamat', no_telp='$notel' WHERE id='{$result['id']}'");

		if($query4) {
?>
		<script> document.location.href='profil_admin.php';</script>
<?php
		}
		else{
?>
		<script language="javascript">alert("input tidak berhasil");</script>
		<script> document.location.href='profil_admin.php';</script>
<?php
		}
	mysqli_close($con);
		}
?>