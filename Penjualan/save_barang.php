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
    $sql="insert into barang values('$kode','$namabarang','$harga','$jumlah')";
    $hasil = mysqli_query($conn,$sql);

    
   
    
    echo "</table> <hr> DATA BARANG SUDAH DI TAMBAHKAN";
?>
<br>

<a href="TampilData.php">KEMBALI>