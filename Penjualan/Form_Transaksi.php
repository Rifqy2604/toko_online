<center>
<form action="save_toko.php" method="post">
    <h1>
        FORM INPUT DATA TRANSAKSI
    <hr>
    <table border="0">
        <?php
        $kode=$_GET['kode'];
        $jumlah=$_GET['jumlah'];
        echo "<td colspan=3> <center> <img src='$kode.jpeg' width=200 height=150>";
        echo "<tr><td>KODE <th>:<td><input name=kode value='$kode' readonly size=5>";
        echo "<tr> <td> JUMLAH <th> : <td> <select name=jumlahbeli>";
        for ($i=1; $i<=$jumlah; $i++)
        echo "<option>$i";
        ?>

        <tr><td>NAMA PEMBELI <th>: <td><input name="namapembeli" size="25">
        

    </table>

    <input type="submit" value="GO">
    <input type="reset" value="RESET">
    