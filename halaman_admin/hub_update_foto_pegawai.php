<?php
	include "connect.php";
	if($_SESSION['status'] == 'user') {
		$id = $_SESSION['id'];
		$folder = "images";
		$upload = "images";
		$foto_size = $_FILES['photobaru']['size'];
		$foto_loc = $_FILES['photobaru']['tmp_name'];
		$foto_name = $_FILES['photobaru']['name'];
		$tipe_file = $_FILES['photobaru']['type'];

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
			if($foto_size < 1000000){
				move_uploaded_file($foto_loc, "$upload/$foto_name");
				$hasil = mysqli_query($con, "UPDATE user SET foto_profil='$folder/$foto_name' WHERE id='$id'");
				if ($hasil){
?>
				<script>document.location.href='halaman_edit_profil_pegawai.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
				}
			}
			else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='halaman_edit_profil_pegawai.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
			}
		}
		else{
?>
		<script language="javascript">alert("Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.");</script>
		<script>document.location.href='halaman_edit_profil_pegawai.php?id=<?php echo $_SESSION['id'];?>';</script>
<?php
		}
	}
?>