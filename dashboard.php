<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- HTML yang menyusun struktur dan menghubungkan berkas CSS eksternal.  -->
  <!-- elemen meta mengatur karakter set, kompatibilitas dengan Internet Explorer, ukuran tampilan dan fitur viewport,serta informasi seperti kata kunci dan deskripsi. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <title>Uas Yolanda</title>
    <!-- tautan untuk mengambil file CSS dari pustaka Owl Carousel  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <!-- Stylesheet ini digunakan untuk memperindah tampilan dan layout halaman web menggunakan framework Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <!-- menampilkan nama yang merupakan hyperlink yang mengarah ke halaman "index.html -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Yolanda Salsabilla
        </span>
      </a>
    </div>
    <!-- end header section -->
     <!-- slider section mengimplementasikan fitur carousel atau slider.-->
     <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/slider1.png" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider2.png" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slide1.png" alt="">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
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
                  <a class="nav-link" href="">Welcome</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <!-- end nav section -->
    <!-- shop section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Restaurant Yolanda
          </h2>
          <p>
          Restoran Itali Dengan Kualitas Terbaik Memberikan Cita Rasa Yang Khas Pada Setiap Makanan Dan Minuman
          </p>
        </div>
        <div class="img-box">
          <img src="images/home.png" alt="" width="300px">
        </div>
        <div class="btn-box">
          <a href="transaksi.php">
            Buy Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->
 <!-- about section -->

 <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about_us.png" alt="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                About Our Restaurant
              </h2>
            </div>
            <p>
              Restaurant Yolanda telah berdiri sejak tahun 2020, dan terus mengembangkan diri<span id="dots">...</span><span id="more"> untuk memastikan cita rasa dan kualitas terbaik. Kami melakukan banyak perjalanan untuk mempelajari berbagai hal, termasuk mencari bahan baku pilihan dan rasa yang khas. Kami bangga menjadi salah satu Restoran terbaik di Palembang, Restaurant Yolanda telah memenuhi ciri restoran berkualitas, cirinya dapat dilihat di bawah ini
                <br><a href="https://istore.oomph.co.id/shareit/detail/26966/ciri-ciri-restoran-berkualita73">DISINI</a>
              </p>
            <a onclick="myFunction()" id="myBtn">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  
 <!-- resto section -->

 <section class="resto_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Menu Restaurant
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

  <!-- end resto section -->
   <!-- contact section -->
   <section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <form action="mailto:yolandasalsbts@gmail.com" method="post" enctype="text/plain">
              <div class="contact_form-container">
                <div>
                  <div>
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" required><br>
                  </div>
                  <div>
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" required><br>
                  </div>
                  <div>
                  <label for="number">Number:</label>
                  <input type="tel" name="number" id="number" required><br>
                  </div>
                  <div>
                  <label for="message">Message:</label>
                  <br>
                  <input name="message" id="message" type="text" class="message_input"  />
                  </div>
                  <div>
                  <input type="submit" value="Submit">
                  </div>
                </div>
              </div>
            </form>
            <form action="#" method="post">
            <div class="contact_form-container">
            <input type="submit" value="Clear" onclick="clearForm()">   
            </div>
       
    </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.1190584212125!2d104.82358685571376!3d-2.96527519002472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b77981167c117%3A0x49d6828224001afd!2sBengkel%20Kokoh%20Jaya%20Mandiri!5e0!3m2!1sid!2sid!4v1690999285125!5m2!1sid!2sid" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
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