<center> 
    <h1>
        INPUT DATA BARANG
<table border="0">
    <?php
    $kode = $_POST['kode'];
    $jumlahbeli= $_POST['jumlahbeli'];
    $namapembeli = $_POST['namapembeli'];


    echo "<tr> <th> KODE <td> : <td>$kode";
    echo "<tr> <th> Jumlah  <td> : <td>$jumlahbeli";
    echo "<tr> <th> Nama Pembeli <td> : <td>$namapembeli";

    require ("Koneksi.php");
    $sql="insert into transaksi values('','$kode','$jumlahbeli','$namapembeli')";
    $hasil = mysqli_query($conn,$sql);

    $sql2="update barang set jumlah=(jumlah-$jumlahbeli) where kode='$kode' ";
    $hasil = mysqli_query($conn,$sql2);

    echo "</table> <hr> DATA TRANSAKSI SUDAH DI TAMBAHKAN";
?>


</table>
<hr>
<a href="toko_online.php">Kembali Ke toko</a>