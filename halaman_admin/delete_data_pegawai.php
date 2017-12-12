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
		<title>Remove Data Pasien</title>
	</head>
	<body>
		<h3>Do you really want to remove ?</h3>
		<form action="hub_delete_pegawai.php" method="post">
			<button type="submit">Save Changes</button>
			<a href="daftar_pasien.php"><button type="button">Back</button></a>
		</form>
	</body>
</html>

