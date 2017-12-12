<?php

	$con = mysqli_connect('localhost','root','','adivaa') or die ("gagal" .mysqli_error());

	session_start();

	if(!(isset($_SESSION['id']))) {
		$_SESSION['status'] = 'nouser';
	}

?>