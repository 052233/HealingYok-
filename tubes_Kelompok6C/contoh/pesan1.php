<?php
require "../login/koneksi.php";
if(empty($_SESSION['email'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="pesan.css">
</head>
<body>
    <!-- <h1>Medan</h1> -->
    <div class="container1">
        <h1>Pesan Tiket</h1>
    <form action="pesan.php" method="post" class="">

        <fieldset>
            <legend>Data Diri :</legend>
            <label for="">Nama Lengkap</label>
            :<input type="text" id="myInput" required name="nama" class="dd"><br>
            <label for="">Tanggal Berangkat</label>
            :<input type="date" id="myInput" required name="tglpergi" class="dd"><br>
            <?php
            
            $paket=$_POST['paket'];
            $harga=$_POST['harga'];
            echo "<input type='text' name='paket' hidden value='$paket'>";
            echo "<input type='text' name='harga' hidden value='$harga'>";
            ?>
            <!-- <label for="">Tanggal Pulang</label>
            :<input type="date" id="myInput" name="tglpulang" class="dd"><br> -->
            <br>

        <div class="container">
            <button type="submit" name="button" id="submit">Pesan</button>
        </div>

        </fieldset>
    </form>
    </div>
</body>
</html>