<h1>
<center>
MENAMPILKAN DATA BARANG
<table border="1">
<tr> <th>NO<th>KODE <th>NAMABARANG <th>HARGA <th>JUMLAH <th colspan="4">ACTION 
<?php
require ("Koneksi.php");
$sql = "select kode,namabarang,harga,jumlah from barang";
$hasil = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($hasil);
$n=1;
do
{
    list($kode,$namabarang,$harga,$jumlah) = $row;
    echo "<tr> <td>$n <td>$kode <td>$namabarang <td>$harga <td>$jumlah";
    echo "<td> <a href ='edit_barang.php?kode=$kode&namabarang=$namabarang&harga=$harga&jumlah=$jumlah'> EDIT";
    echo "<td> <a href ='delete_barang.php?kode=$kode&namabarang=$namabarang&harga=$harga&jumlah=$jumlah'> DELETE";
    echo "<td> <a href ='form_input_barang.php'> INPUT";
    echo "<td> <a href ='form_cari_barang.php'> CARI";
    echo "<td> <a href ='toko_online.php'> TOKO";


  //  echo "<td> <a href ='edit_barang.php?kode=$kode&namabarang=$namabarang&harga=$harga&jumlah=$jumlah'> EDIT ";
    $n++;
}
while ($row = mysqli_fetch_row($hasil))
?>