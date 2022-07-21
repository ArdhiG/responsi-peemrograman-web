<?php
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$komentar = $_POST['komentar'];
	echo "<head><title><My Guest Book</head></title>"; 
	$fp = fopen("guestbook.txt", "a+");
	fputs($fp,"$tanggal|$nama|$alamat|$email|$status|$komentar\n");
	fclose($fp);

	header("Location: setelah-proses.php")
 ?>