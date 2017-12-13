<?php
	include "connect.php";

    $id = $_GET['id'];
	$_SESSION['id_hapus'] = $id;
    $sql = "SELECT * FROM user WHERE id = {$id}";
    $result = $con->query($sql);
    $con->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data Pegawai</title>
	</head>
	<body>
		<h3>Do you really want to delete ?</h3>
		<form action="hub_delete_pegawai.php" method="post">
			<button type="submit">Save Changes</button>
			<a href="daftar_pegawai.php"><button type="button">Back</button></a>
		</form>
	</body>
</html>
