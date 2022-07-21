<?php 

echo "<head><title>keranjang</title></head>";
$fp = fopen("struk.txt","r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>pesanan: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='index.html'> kembali </a>";

?> 