<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fitafieee Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="proses_pesanan.php" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Fitafieee Shop</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.html">Home</a>
                </li>
                
                <li><a href="shop.html">Shop</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="backend/index.html">Dashboard</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Checkout</h2>
            <div class="container">
        <form action="proses_pesanan.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat Pelanggan</label> 
            <div class="col-8">
            <input id="alamat" name="alamat" placeholder="Masukan Alamat" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
            <div class="col-8">
            <input id="tanggal" name="tanggal" placeholder="Masukan Tanggal" type="date" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
        <?php
        require_once 'dbkoneksi.php';
            $sqljenis = "SELECT * FROM produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="produk_id" name="produk_id" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>

      </select>
    </div>
  </div> 
        <div class="form-group row">
            <label for="quantity" class="col-4 col-form-label">Total Pesanan</label> 
            <div class="col-8">
            <input id="quantity" name="quantity" placeholder="Masukan Total Pesanan" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses"
      class="btn btn-primary" value="Simpan"/>
      <a href="index.html" class="btn btn-warning">Back</a>
    </div>
  </div>
        </form>
    </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Jl. Pejaten Jakarta Selatan, 16423</li>
                <li class="phone"><a href="tel://021223667">021 223 667</a></li>
                <li class="email">Fitafieee@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright Fitafieee Shop &copy;<script>document.write(new Date().getFullYear());</script></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>