<?php
$pesan=$_POST['pesan'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
echo "<head><tittle>Struk pembelian</tittle></head>";
$fp = fopen("struk.txt","a+");
fputs ($fp,"$pesan|$nama|$alamat\n");
fclose($fp);

echo "Terima kasih telah mengisi kembali<br>";
echo "<a href=keranjang.php>isi pesanan</a><br>";
echo "<a href=lihat.php> lihat pesanan anda</a><br>";
?> 