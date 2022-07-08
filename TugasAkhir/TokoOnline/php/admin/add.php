<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah Produk</title>
    <link rel="icon" href="../../img/logo.PNG">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../../img/logo.PNG" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="position: center;">
            <li class="nav-item active">
                <a class="nav-link" href="../admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Fashion is Number One</a>
            </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
    <div id="add">
    <div class="container add">
    <div class="card-body">
    <a href="../admin.php">Balik ke Produk</a>
	<br/><br/>
    <div class="card-body">
	<form action="add.php" method="post" name="form1">
		<table width="50%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr> 
				<td>img</td>
				<td><input type="file" name="file"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
    </div>
	<?php
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$img_file = $_FILES['img']['name'];
        $tmp_file = $_FILES['img']['tmp_name'];
        $path = "file/";
        $terupload = move_uploaded_file($tmp_file, $path.$img_file);
            if ($terupload) {
                echo "Upload berhasil!<br/>";
                echo "Link: <a href='".$path.$img_file."'>".$img_file."</a>";
            } else {
                echo "Upload Gagal!";
            }
		include_once("../koneksi.php");
		$result = mysqli_query($conn, "INSERT INTO tbproduct(nama,harga,img) VALUES('$nama','$harga','$img')");
		echo "Produk Berhasil Ditambahkan. <a href='../admin.php'>Lihat Produk</a>";
        
	}
	?>
    <br><br><br><br><br><br><br>
    <footer class="container">
        <p>© 2022 DKShopCompany, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>