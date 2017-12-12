<?php
	include "connect.php";

	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	$query = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE username = '$username'"));
	
	if($query > 0){
?>
		<script language="javascript">alert("username telah digunakan");</script>
		<script> document.location.href='pendaftaran_pegawai.php';</script>	
<?php
	}
	
	else{
		if ($password == $password2) {
			$query = "INSERT INTO user (id, username, password) VALUES ('', '$username', '$password')";
			$data = mysqli_query($con,$query);
	
			if ($data){
?>
	<script> document.location.href='daftar_pegawai.php';</script>
<?php
			}
			else {
?>
	<script language="javascript">alert("gagal");</script>
	<script> document.location.href='pendaftaran_pegawai.php';</script>
<?php
			}
		}
		else {
?>
	<script language="javascript">alert("Password tidak sama");</script>
	<script> document.location.href='pendaftaran_pegawai.php';</script>
<?php
		}
	mysqli_close($con);
	}
?>