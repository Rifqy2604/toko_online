<center> 
    <h1>
        SAVE DATA BARANG
<table border="0">
    <?php
    $kode = $_POST['kode'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];


    echo "<tr> <th> KODE <td> : <td>$kode";
    echo "<tr> <th> NAMA BARANG <td> : <td>$namabarang";
    echo "<tr> <th> HARGA <td> : <td>$harga";
    echo "<tr> <th> JUMLAH <td> : <td>$jumlah";

    require ("Koneksi.php");
    $sql="update barang set namabarang='$namabarang',harga='$harga',jumlah='$jumlah' where kode='$kode' ";
    $hasil = mysqli_query($conn,$sql);

   // $sql2="update barang set jumlah= (jumlah-$jumlahbeli) where kode= 'kode' ";
    $hasil = mysqli_query($conn,$sql);
    echo "</table> <hr> DATA Transaksi SUDAH DI TAMBAHKAN";
?>
</table>
<hr>
<a href="tampildata.php">Kembali</a>