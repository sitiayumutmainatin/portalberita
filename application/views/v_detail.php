<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KLIPING DIGITAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/users/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/users/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/users/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/users/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/users/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/users/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>KLIPING DIGITAL</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $tulisan_id=$i['tulisan_id'];
                       $tulisan_judul=$i['tulisan_judul'];
                       $tulisan_isi=$i['tulisan_isi'];
                       $tulisan_tanggal=$i['tanggal'];
                       $tulisan_author=$i['tulisan_author'];
                       $tulisan_gambar=$i['tulisan_gambar'];
                       $tulisan_file=$i['tulisan_file'];
                       // $tulisan_views=$i['tulisan_views'];
                       $kategori_id=$i['tulisan_kategori_id'];
                       $kategori_nama=$i['tulisan_kategori_nama'];
                       
                    ?>
          <li><a href="<?php echo base_url().'home'?>">Home</a></li>
          <li><a href="#about"><?php echo $tulisan_judul;?></a></li> 
          <?php endforeach;?>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <embed src="theme/pdf/coba.pdf" type="application/pdf" width="1140px" height="600px"/>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Memori Hari Ini</h3>
      </div>
    </section><!-- End Call To Action Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Kliping Digital</span>
          </a>
          <p>Merupakan kumpulan berita harian yang terjadi di Kabupaten Lamongan disajikan dalam bentuk kliping yang dapat diakses secara online.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            Jl. KH. Ahmad Dahlan N0. 1 <br>
            Kauman, Sidoharjo, Kec. Lamongan<br>
            Kabupaten Lamongan, Jawa Timur <br><br>
            <strong>Phone:</strong> (0322) 321168<br>
            <strong>Email:</strong> diskominfolamongan@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/users/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/users/vendor/aos/aos.js"></script>
  <script src="assets/users/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/users/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/users/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/users/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/users/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/users/js/main.js"></script>

</body>

</html>