<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['username'])){
	header("Location: ../index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
    <link rel="icon" href="../img/logo.PNG">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.PNG" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="position: center;">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link disabled">Fashion is Number One</a>
            </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
    <div id="admin">
    <div class="container admin">
    <div class="card">
        <?php
			if(isset($_SESSION['error'])) {
		?>
			<div class="alert alert-warning" role="alert">
		        <?php echo $_SESSION['error']?>
			</div>
		<?php
		}
		?>
        <div class="alert alert-success" role="alert">
		    Berhasil login ke dalam sistem.
		</div>
		<div class="card-body">
			<p>Hello <?php echo $_SESSION['username']?></p>
            <a href="admin/add.php">Add New Product</a><br/><br/>
            <table width='80%' border=1>
            <tr>
                <th>Id</th> <th>Nama</th> <th>Harga</th> <th>img</th> <th>Menu</th>
            </tr>
            <?php  
            $query = "SELECT * FROM tbproduct";
            $result = mysqli_query($conn,$query);
            $no=1;
            while($row = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$no."</td>";$no++;
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['harga']."</td>";
                echo "<td>".$row['img']."</td>";    
                echo "<td><a href='admin/delete.php?nama=$row[nama]'>Delete</a></td></tr>";        
            }
            ?>
            </table>
            <br><br><br>
            <a href="logout.php" >Logout</a>
        </div>
    <br><br><br>
    <footer class="container">
        <p>?? 2022 DKShopCompany, Inc. ?? <a href="#">Privacy</a> ?? <a href="#">Terms</a></p>
    </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>