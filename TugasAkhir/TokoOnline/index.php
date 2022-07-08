<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DKShop</title>
    <link rel="icon" href="img/logo.PNG">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.PNG" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="position: center;">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/product.php">Product</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="php/login.php#login">Login Admin</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" >111202080015@mhs.dinus.ac.id</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Fashion is Number One</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <video muted autoplay width="100%" height="100%">
            <source src="img/slide.mp4" type="video/mp4">
          </video>
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/varsity.jpg" alt="Generic placeholder image" width="140" height="140" style="position: center;">
          <h2>Varsity</h2>
          <p>Juga dikenal sebagai jaket "letterman", gaya varsity sudah ada sejak tahun 1930-an dan telah lama identik dengan budaya atlet Amerika. dan sekarang pada tahun 2020 kembali trend</p>
          <p><a class="btn btn-primary" href="php/product.php" role="button">View on Product »</a></p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/denim.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Denim</h2>
          <p>Denim adalah kain katun yang kokoh dengan benang pakan melewati dua atau lebih benang lungsin. Kain yang digunakan menghadap sisi benang lungsin.</p>
          <p><a class="btn btn-primary" href="php/product.php" role="button">View on Product »</a></p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/classicarmy.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Classic Army</h2>
          <p>Classic Army adalah jaket bulu yang dirancang sebagai insulasi sedang. Potongan yang nyaman dan satu set kantong membuat jaket ini menjadi pakaian serba guna sehari-hari.</p>
          <p><a class="btn btn-primary" href="php/product.php" role="button">View on Product »</a></p>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cargo Brand. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Whoopculture merupakan brand lokal asal Bandung yang menyediakan banyak celana cargo berbagai warna dan desain. Nah, kalau kalian mencari yang warna hijau, kebetulan brand ini juga memilikinya yaitu model Cargo Goral Green Army..</p>
        </div>
        <div class="col-md-5">
          <img class="rounded-circle" src="img/celanacargobrand.jpg" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17e950f2285%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17e950f2285%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Trenton Mesh Riding. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Untuk berkendara di cuaca hangat, jaket mesh sangat diperlukan. Kami menyarankan Trenton Mesh Riding Jacket. Ini sempurna untuk kondisi beruap berkat jaring lubang yang ringan dan lebih kecil. Kami menjaga daya tahan dengan rekayasa bahu dan siku yang diperkuat pada jaket motor tekstil pria ini. Desain garis oranye yang khas dapat dikenali sebagai milik kita sendiri. Dan untuk penyimpanan ekstra, periksa saku dada. Ini adalah fitur yang ditawarkan beberapa jaket mesh..</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="rounded-circle" src="img/trentonmeshriding.jpg" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17e950f2287%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17e950f2287%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Blazer Slim Fit. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Seorang pria harus memiliki paling tidak satu jas pria di lemarinya. Untuk beberapa acara formal, pria biasanya diminta untuk memakai setelan jas. Banyak pria memilih untuk membuat baju jas di penjahit jas profesional. Namun banyak juga yang membeli blazer pria yang sudah jadi karena beberapa alasan seperti harga dan mudah. Harga jas pria yang sudah jadi biasanya dibandrol lebih murah dibandingkan dengan harga jas pria buatan penjahit. Ada beberapa hal yang harus diperhatikan saat memilih blazer pria yang bagus, seperti kualitas bahan, warna, dan harga.</p>
        </div>
        <div class="col-md-5">
          <img class="rounded-circle" src="img/jas.png" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17e950f2288%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17e950f2288%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
      </div>
      <hr class="featurette-divider">
    </div>
    <br><br><br>
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2022 DKShopCompany, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>