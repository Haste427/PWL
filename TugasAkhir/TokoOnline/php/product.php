<?php
include 'koneksi.php';
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Product</title>
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
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php#login">Login Admin</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" >111202080015@mhs.dinus.ac.id</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Fashion is Number One</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <br><br>
    <div class="container marketing">
      <div class="row">
      <?php
        $query = "SELECT * FROM tbproduct";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
      ?>
        <div class="col-lg-4">
          <img class="rounded-circle" src="../img/<?php echo $row['img']; ?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $row['nama']; ?></h2>
          <br>
          <p><?php echo $row['harga']; ?></p>
          <p><a class="btn btn-primary" href="#" role="button">Buy »</a></p>
        </div><!-- /.col-lg-4 -->
        <?php		
            }
          ?>
      </div>
    </div>
    <br><br><br>
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2017-2018 DKShopCompany, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>