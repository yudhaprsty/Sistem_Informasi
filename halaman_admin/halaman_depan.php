<?php
	include 'connect.php';
	if($_SESSION['status'] == "user"){
		$id = $_SESSION['id'];
		$query = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
		$result = mysqli_fetch_array($query);
	}
	$tanggal = getdate();
	$tahun = $tanggal['year'];

	#Grafik Usia
	$usia11 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='1' ");
	$usia21 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='1'");
	$usia31 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='1'");

	$usia12 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='2' ");
	$usia22 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='2'");
	$usia32 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='2'");

	$usia13 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='3' ");
	$usia23 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='3'");
	$usia33 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='3'");

	$usia14 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='4' ");
	$usia24 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='4'");
	$usia34 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='4'");

	$usia15 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='5' ");
	$usia25 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='5'");
	$usia35 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='5'");

	$usia16 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='6' ");
	$usia26 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='6'");
	$usia36 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='6'");

	$usia17 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='7' ");
	$usia27 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='7'");
	$usia37 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='7'");

	$usia18 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='8' ");
	$usia28 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='8'");
	$usia38 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='8'");

	$usia19 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='9' ");
	$usia29 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='9'");
	$usia39 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='9'");

	$usia110 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='10' ");
	$usia210 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='10'");
	$usia310 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='10'");

	$usia111 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='11' ");
	$usia211 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='11'");
	$usia311 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='11'");

	$usia112 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien<='20' AND MONTH(tanggal_daftar)='12' ");
	$usia212 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'20' AND usia_pasien<='50' AND MONTH(tanggal_daftar)='12'");
	$usia312 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND usia_pasien>'50'  AND MONTH(tanggal_daftar)='12'");

	$jumlah_usia11 = mysqli_num_rows($usia11);
	$jumlah_usia21 = mysqli_num_rows($usia21);
	$jumlah_usia31 = mysqli_num_rows($usia31);

	$jumlah_usia12 = mysqli_num_rows($usia12);
	$jumlah_usia22 = mysqli_num_rows($usia22);
	$jumlah_usia32 = mysqli_num_rows($usia32);

	$jumlah_usia13 = mysqli_num_rows($usia13);
	$jumlah_usia23 = mysqli_num_rows($usia23);
	$jumlah_usia33 = mysqli_num_rows($usia33);

	$jumlah_usia14 = mysqli_num_rows($usia14);
	$jumlah_usia24 = mysqli_num_rows($usia24);
	$jumlah_usia34 = mysqli_num_rows($usia34);

	$jumlah_usia15 = mysqli_num_rows($usia15);
	$jumlah_usia25 = mysqli_num_rows($usia25);
	$jumlah_usia35 = mysqli_num_rows($usia35);

	$jumlah_usia16 = mysqli_num_rows($usia16);
	$jumlah_usia26 = mysqli_num_rows($usia26);
	$jumlah_usia36 = mysqli_num_rows($usia36);

	$jumlah_usia17 = mysqli_num_rows($usia17);
	$jumlah_usia27 = mysqli_num_rows($usia27);
	$jumlah_usia37 = mysqli_num_rows($usia37);

	$jumlah_usia18 = mysqli_num_rows($usia18);
	$jumlah_usia28 = mysqli_num_rows($usia28);
	$jumlah_usia38 = mysqli_num_rows($usia38);

	$jumlah_usia19 = mysqli_num_rows($usia19);
	$jumlah_usia29 = mysqli_num_rows($usia29);
	$jumlah_usia39 = mysqli_num_rows($usia39);

	$jumlah_usia110 = mysqli_num_rows($usia110);
	$jumlah_usia210 = mysqli_num_rows($usia210);
	$jumlah_usia310 = mysqli_num_rows($usia310);

	$jumlah_usia111 = mysqli_num_rows($usia111);
	$jumlah_usia211 = mysqli_num_rows($usia211);
	$jumlah_usia311 = mysqli_num_rows($usia311);

	$jumlah_usia112 = mysqli_num_rows($usia112);
	$jumlah_usia212 = mysqli_num_rows($usia212);
	$jumlah_usia312 = mysqli_num_rows($usia312);

	#Grafik Pekerjaan
	$tanggal = getdate();
	$tahun = $tanggal['year'];

	$pekerjaan11 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='1' ");
	$pekerjaan21 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='1'");
	$pekerjaan31 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='1'");
	$pekerjaan41 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='1'");
	$pekerjaan51 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='1'");
	$pekerjaan61 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='1'");

	$pekerjaan12 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='2' ");
	$pekerjaan22 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='2'");
	$pekerjaan32 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='2'");
	$pekerjaan42 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='2'");
	$pekerjaan52 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='2'");
	$pekerjaan62 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='2'");

	$pekerjaan13 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='3' ");
	$pekerjaan23 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='3'");
	$pekerjaan33 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='3'");
	$pekerjaan43 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='3'");
	$pekerjaan53 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='3'");
	$pekerjaan63 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='3'");

	$pekerjaan14 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='4' ");
	$pekerjaan24 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='4'");
	$pekerjaan34 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='4'");
	$pekerjaan44 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='4'");
	$pekerjaan54 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='4'");
	$pekerjaan64 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='4'");

	$pekerjaan15 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='5' ");
	$pekerjaan25 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='5'");
	$pekerjaan35 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='5'");
	$pekerjaan45 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='5'");
	$pekerjaan55 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='5'");
	$pekerjaan65 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='5'");

	$pekerjaan16 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='6' ");
	$pekerjaan26 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='6'");
	$pekerjaan36 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='6'");
	$pekerjaan46 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='6'");
	$pekerjaan56 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='6'");
	$pekerjaan66 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='6'");

	$pekerjaan17 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='7' ");
	$pekerjaan27 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='7'");
	$pekerjaan37 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='7'");
	$pekerjaan47 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='7'");
	$pekerjaan57 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='7'");
	$pekerjaan67 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='7'");

	$pekerjaan18 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='8' ");
	$pekerjaan28 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='8'");
	$pekerjaan38 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='8'");
	$pekerjaan48 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='8'");
	$pekerjaan58 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='8'");
	$pekerjaan68 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='8'");

	$pekerjaan19 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='19' ");
	$pekerjaan29 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='9'");
	$pekerjaan39 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='9'");
	$pekerjaan49 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='9'");
	$pekerjaan59 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='9'");
	$pekerjaan69 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='9'");

	$pekerjaan110 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='10' ");
	$pekerjaan210 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='10'");
	$pekerjaan310 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='10'");
	$pekerjaan410 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='10'");
	$pekerjaan510 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='10'");
	$pekerjaan610 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='10'");

	$pekerjaan111 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='11' ");
	$pekerjaan211 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='11'");
	$pekerjaan311 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='11'");
	$pekerjaan411 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='11'");
	$pekerjaan511 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga'  AND MONTH(tanggal_daftar)='11'");
	$pekerjaan611 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='11'");

	$pekerjaan112 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Mahasiswi' AND MONTH(tanggal_daftar)='12' ");
	$pekerjaan212 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Dosen'AND MONTH(tanggal_daftar)='12'");
	$pekerjaan312 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Guru' AND MONTH(tanggal_daftar)='12'");
	$pekerjaan412 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='PNS' AND MONTH(tanggal_daftar)='12'");
	$pekerjaan512 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Ibu Rumah Tangga' AND MONTH(tanggal_daftar)='12'");
	$pekerjaan612 = $con->query("SELECT * FROM  data_pasien WHERE YEAR(tanggal_daftar)='$tahun' AND pekerjaan_pasien='Lainnya' AND MONTH(tanggal_daftar)='12'");

	$jumlah_pekerjaan11 = mysqli_num_rows($pekerjaan11);
	$jumlah_pekerjaan21 = mysqli_num_rows($pekerjaan21);
	$jumlah_pekerjaan31 = mysqli_num_rows($pekerjaan31);
	$jumlah_pekerjaan41 = mysqli_num_rows($pekerjaan41);
	$jumlah_pekerjaan51 = mysqli_num_rows($pekerjaan51);
	$jumlah_pekerjaan61 = mysqli_num_rows($pekerjaan61);

	$jumlah_pekerjaan12 = mysqli_num_rows($pekerjaan12);
	$jumlah_pekerjaan22 = mysqli_num_rows($pekerjaan22);
	$jumlah_pekerjaan32 = mysqli_num_rows($pekerjaan32);
	$jumlah_pekerjaan42 = mysqli_num_rows($pekerjaan42);
	$jumlah_pekerjaan52 = mysqli_num_rows($pekerjaan52);
	$jumlah_pekerjaan62 = mysqli_num_rows($pekerjaan62);

	$jumlah_pekerjaan13 = mysqli_num_rows($pekerjaan13);
	$jumlah_pekerjaan23 = mysqli_num_rows($pekerjaan23);
	$jumlah_pekerjaan33 = mysqli_num_rows($pekerjaan33);
	$jumlah_pekerjaan43 = mysqli_num_rows($pekerjaan43);
	$jumlah_pekerjaan53 = mysqli_num_rows($pekerjaan53);
	$jumlah_pekerjaan63 = mysqli_num_rows($pekerjaan63);

	$jumlah_pekerjaan14 = mysqli_num_rows($pekerjaan14);
	$jumlah_pekerjaan24 = mysqli_num_rows($pekerjaan24);
	$jumlah_pekerjaan34 = mysqli_num_rows($pekerjaan34);
	$jumlah_pekerjaan44 = mysqli_num_rows($pekerjaan44);
	$jumlah_pekerjaan54 = mysqli_num_rows($pekerjaan54);
	$jumlah_pekerjaan64 = mysqli_num_rows($pekerjaan64);

	$jumlah_pekerjaan15 = mysqli_num_rows($pekerjaan15);
	$jumlah_pekerjaan25 = mysqli_num_rows($pekerjaan25);
	$jumlah_pekerjaan35 = mysqli_num_rows($pekerjaan35);
	$jumlah_pekerjaan45 = mysqli_num_rows($pekerjaan45);
	$jumlah_pekerjaan55 = mysqli_num_rows($pekerjaan55);
	$jumlah_pekerjaan65 = mysqli_num_rows($pekerjaan65);

	$jumlah_pekerjaan16 = mysqli_num_rows($pekerjaan16);
	$jumlah_pekerjaan26 = mysqli_num_rows($pekerjaan26);
	$jumlah_pekerjaan36 = mysqli_num_rows($pekerjaan36);
	$jumlah_pekerjaan46 = mysqli_num_rows($pekerjaan46);
	$jumlah_pekerjaan56 = mysqli_num_rows($pekerjaan56);
	$jumlah_pekerjaan66 = mysqli_num_rows($pekerjaan66);

	$jumlah_pekerjaan17 = mysqli_num_rows($pekerjaan17);
	$jumlah_pekerjaan27 = mysqli_num_rows($pekerjaan27);
	$jumlah_pekerjaan37 = mysqli_num_rows($pekerjaan37);
	$jumlah_pekerjaan47 = mysqli_num_rows($pekerjaan47);
	$jumlah_pekerjaan57 = mysqli_num_rows($pekerjaan57);
	$jumlah_pekerjaan67 = mysqli_num_rows($pekerjaan67);

	$jumlah_pekerjaan18 = mysqli_num_rows($pekerjaan18);
	$jumlah_pekerjaan28 = mysqli_num_rows($pekerjaan28);
	$jumlah_pekerjaan38 = mysqli_num_rows($pekerjaan38);
	$jumlah_pekerjaan48 = mysqli_num_rows($pekerjaan48);
	$jumlah_pekerjaan58 = mysqli_num_rows($pekerjaan58);
	$jumlah_pekerjaan68 = mysqli_num_rows($pekerjaan68);

	$jumlah_pekerjaan19 = mysqli_num_rows($pekerjaan19);
	$jumlah_pekerjaan29 = mysqli_num_rows($pekerjaan29);
	$jumlah_pekerjaan39 = mysqli_num_rows($pekerjaan39);
	$jumlah_pekerjaan49 = mysqli_num_rows($pekerjaan49);
	$jumlah_pekerjaan59 = mysqli_num_rows($pekerjaan59);
	$jumlah_pekerjaan69 = mysqli_num_rows($pekerjaan69);

	$jumlah_pekerjaan110 = mysqli_num_rows($pekerjaan110);
	$jumlah_pekerjaan210 = mysqli_num_rows($pekerjaan210);
	$jumlah_pekerjaan310 = mysqli_num_rows($pekerjaan310);
	$jumlah_pekerjaan410 = mysqli_num_rows($pekerjaan410);
	$jumlah_pekerjaan510 = mysqli_num_rows($pekerjaan510);
	$jumlah_pekerjaan610 = mysqli_num_rows($pekerjaan610);

	$jumlah_pekerjaan111 = mysqli_num_rows($pekerjaan111);
	$jumlah_pekerjaan211 = mysqli_num_rows($pekerjaan211);
	$jumlah_pekerjaan311 = mysqli_num_rows($pekerjaan311);
	$jumlah_pekerjaan411 = mysqli_num_rows($pekerjaan411);
	$jumlah_pekerjaan511 = mysqli_num_rows($pekerjaan511);
	$jumlah_pekerjaan611 = mysqli_num_rows($pekerjaan611);

	$jumlah_pekerjaan112 = mysqli_num_rows($pekerjaan112);
	$jumlah_pekerjaan212 = mysqli_num_rows($pekerjaan212);
	$jumlah_pekerjaan312 = mysqli_num_rows($pekerjaan312);
	$jumlah_pekerjaan412 = mysqli_num_rows($pekerjaan412);
	$jumlah_pekerjaan512 = mysqli_num_rows($pekerjaan512);
	$jumlah_pekerjaan612 = mysqli_num_rows($pekerjaan612);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Adivaa Klinik</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<!--Grafik Usia-->
	<script type="text/javascript" src="js/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Bulan', 'Usia <20', 'Usia >20 & <50', 'Usia >50'],
        ['Jan', <?php echo $jumlah_usia11; ?>,  <?php echo $jumlah_usia21; ?>, <?php echo $jumlah_usia31; ?>],
				['Feb', <?php echo $jumlah_usia12; ?>,  <?php echo $jumlah_usia22; ?>, <?php echo $jumlah_usia32; ?>],
				['Mar', <?php echo $jumlah_usia13; ?>,  <?php echo $jumlah_usia23; ?>, <?php echo $jumlah_usia33; ?>],
				['Apr', <?php echo $jumlah_usia14; ?>,  <?php echo $jumlah_usia24; ?>, <?php echo $jumlah_usia34; ?>],
				['Mei', <?php echo $jumlah_usia15; ?>,  <?php echo $jumlah_usia25; ?>, <?php echo $jumlah_usia35; ?>],
				['Jun', <?php echo $jumlah_usia16; ?>,  <?php echo $jumlah_usia26; ?>, <?php echo $jumlah_usia36; ?>],
				['Jul', <?php echo $jumlah_usia17; ?>,  <?php echo $jumlah_usia27; ?>, <?php echo $jumlah_usia37; ?>],
				['Aug', <?php echo $jumlah_usia18; ?>,  <?php echo $jumlah_usia28; ?>, <?php echo $jumlah_usia38; ?>],
				['Sep', <?php echo $jumlah_usia19; ?>,  <?php echo $jumlah_usia29; ?>, <?php echo $jumlah_usia39; ?>],
				['Okt', <?php echo $jumlah_usia110; ?>,  <?php echo $jumlah_usia210; ?>, <?php echo $jumlah_usia310; ?>],
				['Nov', <?php echo $jumlah_usia111; ?>,  <?php echo $jumlah_usia211; ?>, <?php echo $jumlah_usia311; ?>],
				['Des', <?php echo $jumlah_usia112; ?>,  <?php echo $jumlah_usia212; ?>, <?php echo $jumlah_usia312; ?>],
      ]);

      var options = {
        chart: {
          title: 'Grafik Usia Pasien',
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
	<!--grafik pekerjaan-->
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Bulan', 'Mahasiswi', 'Dosen', 'Guru', 'PNS', 'Ibu Rumah Tangga', 'Lainnya'],
        ['Jan', <?php echo $jumlah_pekerjaan11; ?>,  <?php echo $jumlah_pekerjaan21; ?>, <?php echo $jumlah_pekerjaan31; ?>, <?php echo $jumlah_pekerjaan41; ?>, <?php echo $jumlah_pekerjaan51; ?>, <?php echo $jumlah_pekerjaan61; ?>],
       	['Feb', <?php echo $jumlah_pekerjaan12; ?>,  <?php echo $jumlah_pekerjaan22; ?>, <?php echo $jumlah_pekerjaan32; ?>, <?php echo $jumlah_pekerjaan42; ?>, <?php echo $jumlah_pekerjaan52; ?>, <?php echo $jumlah_pekerjaan62; ?>],
				['Mar', <?php echo $jumlah_pekerjaan13; ?>,  <?php echo $jumlah_pekerjaan23; ?>, <?php echo $jumlah_pekerjaan33; ?>, <?php echo $jumlah_pekerjaan43; ?>, <?php echo $jumlah_pekerjaan53; ?>, <?php echo $jumlah_pekerjaan63; ?>],
				['Apr', <?php echo $jumlah_pekerjaan14; ?>,  <?php echo $jumlah_pekerjaan24; ?>, <?php echo $jumlah_pekerjaan34; ?>, <?php echo $jumlah_pekerjaan44; ?>, <?php echo $jumlah_pekerjaan54; ?>, <?php echo $jumlah_pekerjaan64; ?>],
				['Mei', <?php echo $jumlah_pekerjaan15; ?>,  <?php echo $jumlah_pekerjaan25; ?>, <?php echo $jumlah_pekerjaan35; ?>, <?php echo $jumlah_pekerjaan45; ?>, <?php echo $jumlah_pekerjaan55; ?>, <?php echo $jumlah_pekerjaan65; ?>],
				['Jun', <?php echo $jumlah_pekerjaan16; ?>,  <?php echo $jumlah_pekerjaan26; ?>, <?php echo $jumlah_pekerjaan36; ?>, <?php echo $jumlah_pekerjaan46; ?>, <?php echo $jumlah_pekerjaan56; ?>, <?php echo $jumlah_pekerjaan66; ?>],
				['Jul', <?php echo $jumlah_pekerjaan17; ?>,  <?php echo $jumlah_pekerjaan27; ?>, <?php echo $jumlah_pekerjaan37; ?>, <?php echo $jumlah_pekerjaan47; ?>, <?php echo $jumlah_pekerjaan57; ?>, <?php echo $jumlah_pekerjaan67; ?>],
				['Aug', <?php echo $jumlah_pekerjaan18; ?>,  <?php echo $jumlah_pekerjaan28; ?>, <?php echo $jumlah_pekerjaan38; ?>, <?php echo $jumlah_pekerjaan48; ?>, <?php echo $jumlah_pekerjaan58; ?>, <?php echo $jumlah_pekerjaan68; ?>],
				['Sep', <?php echo $jumlah_pekerjaan19; ?>,  <?php echo $jumlah_pekerjaan29; ?>, <?php echo $jumlah_pekerjaan39; ?>, <?php echo $jumlah_pekerjaan49; ?>, <?php echo $jumlah_pekerjaan59; ?>, <?php echo $jumlah_pekerjaan69; ?>],
				['Okt', <?php echo $jumlah_pekerjaan110; ?>,  <?php echo $jumlah_pekerjaan210; ?>, <?php echo $jumlah_pekerjaan310; ?>, <?php echo $jumlah_pekerjaan410; ?>, <?php echo $jumlah_pekerjaan510; ?>, <?php echo $jumlah_pekerjaan610; ?>],
				['Nov', <?php echo $jumlah_pekerjaan111; ?>,  <?php echo $jumlah_pekerjaan211; ?>, <?php echo $jumlah_pekerjaan311; ?>, <?php echo $jumlah_pekerjaan411; ?>, <?php echo $jumlah_pekerjaan511; ?>, <?php echo $jumlah_pekerjaan611; ?>],
				['Des', <?php echo $jumlah_pekerjaan112; ?>,  <?php echo $jumlah_pekerjaan212; ?>, <?php echo $jumlah_pekerjaan312; ?>, <?php echo $jumlah_pekerjaan412; ?>, <?php echo $jumlah_pekerjaan512; ?>, <?php echo $jumlah_pekerjaan612; ?>],
      ]);

      var options = {
        chart: {
          title: 'Grafik Jenis Pekerjaan Pasien',
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="halaman_depan.php" class="site_title"><img src="images/Logo Adivaa.png" height="60px" widht="60px"></a>
					</div>
					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?php echo $result['foto_profil']?>" alt="..." class="img-circle profile_img" width="50" height="50">
						</div>
						<div class="profile_info">
							<span>Admin</span>
							<h2><?php echo $result['nama']?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br/>

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="halaman_depan.php">Dashboard</a></li>
										<li><a href="profil_admin.php">Profil Admin</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Pasien <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daftar_pasien.php">Daftar Pasien</a></li>
										<li><a href="daftar_riwayat_treatment.php">Daftar Riwayat Treatment</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Pegawai <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daftar_pegawai.php">Daftar Pegawai</a></li>
										<li><a href="pendaftaran_pegawai.php">Pendaftaran Pegawai</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Pendapatan <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="grafik_pendapatan.php">Grafik Pendapatan</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo $result['foto_profil']?>" alt="" width="20" height="20"><?php echo $result['nama']?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="hub_keluar.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">

				<!-- top tiles -->
				<div class="row tile_count">
					<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
						<span class="count_top"><i class="fa fa-user"></i> Total Pasien</span>
						<div class="count">
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM data_pasien ");
								$jumlah = mysqli_num_rows($query1);
								echo $jumlah;
							?>
						</div>
					</div>
					<div class="col-md-10 col-sm-4 col-xs-6 tile_stats_count">
						<span class="count_top"><i class="fa fa-clock-o"></i> Total Pendapatan</span>
						<div class="count">
							<?php
								$query2 = mysqli_query($con, "SELECT SUM(biaya_perawatan) AS jumlahbiaya FROM riwayat ");
								$jumlah = mysqli_fetch_assoc($query2);
							?>
							Rp <?php echo $jumlah['jumlahbiaya']; ?>
						</div>
					</div>
				</div>
				<!-- /top tiles -->

				<div id="columnchart_material" style="width:990px; height: 500px;"></div>
				<div id="columnchart_material2" style="width:990px; height: 500px;"></div>
				</br>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Adivaa Skin Care Clinic
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

		</div>
	</div>

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="../vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="../vendors/Flot/jquery.flot.js"></script>
	<script src="../vendors/Flot/jquery.flot.pie.js"></script>
	<script src="../vendors/Flot/jquery.flot.time.js"></script>
	<script src="../vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="../vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
</body>

</html>
