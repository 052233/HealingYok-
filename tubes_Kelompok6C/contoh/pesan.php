<?php
require "../login/koneksi.php";


if(empty($_SESSION['username'])){
    header("location:login.php");
}
$nama=$_POST['nama'];
$username=$_SESSION['username'];
$phone=$_SESSION['phone'];
$paket=$_POST['paket'];
$harga=$_POST['harga'];
$tglpergi=$_POST['tglpergi'];
$destinasi=$_SESSION['destinasi'];
$sql="INSERT INTO pesanan(nama,username ,phone, tglpergi, paket, destinasi, total_harga) VALUES('$nama','$username','$phone','$tglpergi','$paket','$destinasi', '$harga')";
if($koneksi->query($sql)===TRUE){
}
else{
    echo"Pesanan gagal disimpan";
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
    <div class="container1">
        <h1>Pesanan telah terkirim!</h1><br>
        <p>Setelah memesan paket penginapan, mohon lakukan pembayaran : <br>
            1. Bayar ke BRI 2319743910 (A.N Basirun) <br>
            2. Nama Pembayar harus sama dengan nama Pemesanan <br>
            3. Kirim bukti pembayaran ke email Kelompok6@gmail.com <br>
        </p>
        <button onclick="window.location.href='index.php'">Kembali</button>
        </div>
    </div>
</body>
</html>