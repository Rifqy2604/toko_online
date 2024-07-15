<center> 
    <h1>
        INPUT DATA TRANSAKSI
<table border="0">
    <?php
    $kode = $_POST['kode'];
    $jumlah = $_POST['jumlah'];
    $namapembeli = $_POST['namapembeli'];


    echo "<tr> <th> KODE <td> : <td>$kode";
    echo "<tr> <th> HARGA <td> : <td>$jumlah";
    echo "<tr> <th> JUMLAH <td> : <td>$namapembeli";

    require ("Koneksi.php");
    $sql = "INSERT INTO transaksi (kode, jumlah, namapembeli) VALUES ('$kode', '$jumlah', '$namapembeli')";

//    $sql="insert into transaksi(id,kode,jumlah,namapembeli) values('','$kode','$jumlah','$namapembeli')";
    $hasil = mysqli_query($conn,$sql);
    echo "</table> <hr> DATA BARANG SUDAH DI TAMBAHKAN";
?>