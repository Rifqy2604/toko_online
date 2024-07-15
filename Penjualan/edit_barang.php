<form action="save_edit.php" method="post">
<center>
    <h1>
        FORM EDIT DATA BARANG
    <hr>
    <table>
    <?php
    $kode=$_GET['kode'];
    $namabarang=$_GET['namabarang'];
    $harga=$_GET['harga'];
    $jumlah=$_GET['jumlah'];
        echo "<tr><td>KODE <th>:<td><input name=kode value='$kode' size=5 readonly>
        <tr><td>NAMA BARANG <th>:<td><input name=namabarang value='$namabarang 'size=25>
        <tr><td>HARGA <th>:<td><input name=harga value='$harga'size=5>
        <tr><td>JUMLAH <th>:<td><input name=jumlah value='$jumlah'size=5> ";
        ?>
    </table>

    <input type="submit" value="GO">
    <input type="reset" value="RESET">
