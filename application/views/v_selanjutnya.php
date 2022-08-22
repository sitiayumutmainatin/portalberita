<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KLIPING DIGITAL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Bootstr<ap CSS File -->
    <link href="<?php echo base_url() . 'depan/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Bootstr<ap CSS File -->
    <link href="<?php echo base_url() . 'depan/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url() . 'depan/lib/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/animate/animate.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/ionicons/css/ionicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/lightbox/css/lightbox.min.css' ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url() . 'depan/css/style.css' ?>" rel="stylesheet">

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

    <!-- Bootstr<ap CSS File -->
    <link href="<?php echo base_url() . 'depan/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url() . 'depan/lib/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/animate/animate.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/ionicons/css/ionicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'depan/lib/lightbox/css/lightbox.min.css' ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url() . 'depan/css/style.css' ?>" rel="stylesheet">

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
                    <li><a href="<?php echo base_url() . 'home' ?>">Home</a></li>
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

                <header class="section-header">
                    <h3>KLIPING DIGITAL</h3>
                    <p>KUMPULAN BERITA HARIAN YANG TERJADI DI KABUPATEN LAMONGAN
                    </p>
                </header>

                <div class="row about-cols" id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


                    <?php foreach ($data->result() as $row) : ?>

                        <div class="col-md-4 wow fadeInUp">
                            <div class="about-col">
                                <div class="img">
                                    <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar ?>" alt="" class="img-fluid">
                                    <header class="section-header">
                                    </header>
                                </div>
                                <h2 class="title"><a href="<?php echo base_url() . 'detail' ?>"><?php echo substr($row->tulisan_judul, 0, 100); ?></a></h2>
                                <p></p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    <div class="">
                        <a href="<?php echo base_url() . 'selanjutnya' ?>">Lihat Selengkapnya</a>
                    </div>

                </div>

            </div>
        </section><!-- End About Us Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>KLIPING DIGITAL</strong>. All Rights Reserved
                <br>Designed by <a href="https://lamongankab.go.id/diskominfo">Dinas Komunikasi dan Informatika Lamongan</a>
            </div>

        </div>
    </footer><!-- #footer -->
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

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url() . 'depan/lib/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/jquery/jquery-migrate.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/superfish/hoverIntent.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/superfish/superfish.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/wow/wow.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/waypoints/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/counterup/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/owlcarousel/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/isotope/isotope.pkgd.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/lightbox/js/lightbox.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'depan/lib/touchSwipe/jquery.touchSwipe.min.js' ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url() . 'depan/contactform/contactform.js' ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url() . 'depan/js/main.js' ?>"></script>

</body>

</html>