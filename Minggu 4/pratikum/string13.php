<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String 13</title>
</head>
<body>
<form action="" method="post">
NIM Anda :
<input type="text" name="txtnim"><br>
<input type="submit" name="Submit" value="Proses">
</form>
<?php
if (isset($_POST['Submit'])) {
    $nim = $_POST['txtnim'];
    $a = substr ($nim, 2, 2);
    switch($a) {
        case '11' : $jurusan = "Teknik Informatika";
        break;
        case '22' : $jurusan = "Sistem Informasi";
        break;
        case '33' : $jurusan = "Sistem Komputer";
        break;
        case '44' : $jurusan = "Komputerisasi Akuntansi";
        break;
        default : $jurusan = "Salah jurusan";
    }
    echo "Nim Anda : $nim<br>";
    echo "Jurusan Anda : $jurusan";
}
?>
</body>
</html>