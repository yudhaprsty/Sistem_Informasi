<?php
	include "connect.php";

    $id_riwayat = $_GET['id_riwayat'];
		$_SESSION['id_riwayat'] = $id_riwayat;
    $sql = "SELECT * FROM riwayat WHERE id_riwayat = {$id_riwayat}";
    $result = $con->query($sql);
    $con->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Remove Data Riwayat Treatment</title>
	</head>
	<body>
		<h3>Do you really want to remove ?</h3>
		<form action="hub_delete_riwayat.php" method="post">
			<button type="submit">Save Changes</button>
			<a href="daftar_riwayat_treatment.php"><button type="button">Back</button></a>
		</form>
	</body>
</html>
