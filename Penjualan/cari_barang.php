<h1>
<center>
MENAMPILKAN HASIL PENCARIAN DATA BARANG
<table border="1">
<tr> <th>NO<th>KODE <th>NAMABARANG <th>HARGA <th>JUMLAH  
<?php
require ("Koneksi.php");
$namabarang = $_POST['namabarang'];
$sql = "select kode,namabarang,harga,jumlah from barang where namabarang like '%$namabarang%' ";
$hasil = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($hasil);
$n=1;
do
{
    list($kode,$namabarang,$harga,$jumlah) = $row;
    echo "<tr> <td>$n <td>$kode <td>$namabarang <td>$harga <td>$jumlah";



  //  echo "<td> <a href ='edit_barang.php?kode=$kode&namabarang=$namabarang&harga=$harga&jumlah=$jumlah'> EDIT ";
    $n++;
}
while ($row = mysqli_fetch_row($hasil))
?>
</table>
<hr>
<a href="tampildata.php">Kembali</a>