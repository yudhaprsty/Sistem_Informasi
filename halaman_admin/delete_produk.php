<?php
	include "connect.php";

    $id_produk = $_GET['id_produk'];
		$_SESSION['id_produk'] = $id_produk;
    $sql = "SELECT * FROM daftar_harga WHERE id_produk = {$id_produk}";
    $result = $con->query($sql);
    $con->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data Perawatan</title>
	</head>
	<body>
		<h3>Do you really want to remove ?</h3>
		<form action="hub_delete_produk.php" method="post">
			<button type="submit">Save Changes</button>
			<a href="daftar_produk.php"><button type="button">Back</button></a>
		</form>
	</body>
</html>
