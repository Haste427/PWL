<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_dkstore";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi server / database Gagal..........");
}
//echo "Koneksi Berhasil...";
