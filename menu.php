<?php
        session_start();
        if(isset($_POST['username']) && isset($_POST['nama'])){
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['nama'] = $_POST['nama'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <title>Uas Yolanda</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Yolanda Salsabilla
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>
    
  
  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu.php">Menu </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transaksi.php">Transaction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="kontak.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Selamat Datang <?php
                    if($_SESSION['username']){
                      echo $_SESSION['username'];
                  }
                  ?></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- menu section -->

 <section class="resto_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Menu
        </h2>
      </div>
    </div>
    <div class="container-fluid">

    <div class="resto_container">
        <div class="box">
          <img src="images/f1.png" alt="">
          <div class="link_box">
            <h5>
              Pizza
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f2.png" alt="">
          <div class="link_box">
            <h5>
              Spaghetti
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f3.png" alt="">
          <div class="link_box">
            <h5>
              Kwetiau
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/d1.png" alt="">
          <div class="link_box">
            <h5>
              Ice Tea
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/d2.png" alt="">
          <div class="link_box">
            <h5>
              Orange Juice
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/d3.png" alt="">
          <div class="link_box">
            <h5>
              Fruit Juice
            </h5>
            <a href="transaksi.php">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end menu section -->
  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          Yolanda Salsabilla
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
              Jln. Taqwa Mata Merah
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +6289502641476
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
              yolandasalsabillaa@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
            <p></p>
              <button >
                <a class="text-white" href="kontak.php">Contact Us</a>
                
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end info section -->


 <!-- footer section -->
 <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> Politeknik Negeri Sriwijaya
      <a href="https://www.polsri.ac.id/">By Yolanda Salsabilla</a>
    </p>
  </section>
  <!-- footer section -->

  
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  </body>

</html>