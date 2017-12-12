<?php
	include "connect.php";

    $id_pasien = $_GET['id_pasien'];
		$_SESSION['id_pasien'] = $id_pasien;
    $sql = "SELECT * FROM data_pasien WHERE id_pasien = {$id_pasien}";
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
		<form action="hub_delete_pasien.php" method="post">
			<button type="submit">Save Changes</button>
			<a href="daftar_pasien.php"><button type="button">Back</button></a>
		</form>
	</body>
</html>
