<?php
include_once("../koneksi.php");
$nama = $_GET['nama'];
$result = mysqli_query($conn, "DELETE FROM tbproduct WHERE nama='$nama'");
header("Location:../admin.php");
?>