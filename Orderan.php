<html>
	<head>
		<title>Struk pesanan</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="pesan.css">
	</head>
	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">keranjang pesanan </font></strong></div>
			<form name="form1" method="post" action="prosses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Masukan kembali pesanan anda</td>
						<td><input name="pesan" type="text" id="pesan"></td>
					</tr>
					<tr>
						<td>nama</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>
					<tr>
						<td>alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td> </tr>
					</tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat daftar pesanan::
		</a></strong></div>
	</body>
</html>