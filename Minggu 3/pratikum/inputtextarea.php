<html>
<head><title>Kritik dan Saran ~ Inputan
Textarea</title></head>
<body>
<?php
if (isset($_POST['Proses'])) {
$saran = nl2br($_POST['saran']);
echo "Kritik / Saran Anda adalah : <br>";
echo "<font color=blue><b>$saran</b></font>";
}
?>
<form action="prosestextarea.php" method="post" name="input">
<h2>Input Kritik / Saran :</h2>
<textarea name="saran" cols="40" rows="5"></textarea><br>
<input type="submit" name="Proses" value="">
</form>
</body>
</html>