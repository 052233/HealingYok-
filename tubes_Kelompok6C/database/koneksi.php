<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'tubes_kelompok6';

    $koneksi = mysqli_connect($host,$user,$pass,$database);
?>