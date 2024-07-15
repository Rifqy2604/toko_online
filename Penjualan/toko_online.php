<h1>
<center>
TOKO SI PANJUL !!
<table border="0">
<?php
require ("Koneksi.php");
$sql = "select kode,namabarang,harga,jumlah from barang";
$hasil = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($hasil);
do
{
    list($kode,$namabarang,$harga,$jumlah) = $row;
    echo "<td colspan =2> <center> <img src='$kode.jpeg' width=200 height=150>";
    echo "<br> $kode <br> $namabarang <br>$harga <br> $jumlah";
    echo "<br> <a href='form_transaksi.php?kode=$kode&jumlah=$jumlah'> BELI SEKARANG";
}
while ($row = mysqli_fetch_row($hasil))
?>

</table>
<hr>
<a href="tampildata.php">Kembali</a>