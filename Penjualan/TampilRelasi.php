<h1>
<center>
MENAMPILKAN DATA BARANG
<table border="1">
<tr> <th>NO <th> NAMA BARANG <th>NAMA PEMBELI <th>HARGA <th>JUMLAH <th> TOTAL
<?php
require ("Koneksi.php");
$sql =  "select barang.namabarang , transaksi.namapembeli,barang.harga, transaksi.jumlah from barang,transaksi 
 where barang.kode=transaksi.kode";
$hasil = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($hasil);
$n=1;

do
{
    list($namabarang,$namapembeli,$harga,$jumlah) = $row;
    $total = $harga * $jumlah ;
    echo "<tr> <td>$n <td>$namabarang <td>$namapembeli <td>$harga <td>$jumlah <td>$total";
    $n++;
}
while ($row = mysqli_fetch_row($hasil))
?>