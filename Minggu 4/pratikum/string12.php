<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String 12</title>
</head>
<body>
<form action="" method="post">
    Input teks di sini :<br>
    <textarea name="input" cols="40" rows="4"></textarea><br>
    <input type="submit" name="Submit" value="Proses">
</form>
<?php
if (isset($_POST['Submit'])) {
$txt = $_POST['input'];
echo "<u>Tanpa nl2br() :</u> <br>$txt<br><br>";
echo "<u>Dengan nl2br :</u> <br>". nl2br ($txt);
}
?>
</body>
</html>