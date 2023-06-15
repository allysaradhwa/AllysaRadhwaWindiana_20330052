<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>FLexStart/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>FLexStart/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>FLexStart/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>FLexStart/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.6.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>E-Voting</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="<?= site_url('Auth/login_admin')?>">Login as Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang di <br>E-Voting Kepala Desa</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Silahkan gunakan hak suara anda untuk menentukan Kepala desa yang baru</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start mt-3">
              <a href="<?= site_url('auth/login_pemilih')?>" class="mr-3 btn btn-primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Login as Elector</span>
              </a>
              <a href="#contact" class="btn btn-secondary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Belum punya akun?</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url()?>FLexStart/assets/img/bot.PNG" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Register</h2>
          <p>Mohon Registrasi</p>
        </header>

        <div class="row gy-4">

        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        	<img src="<?= base_url()?>FLexStart/assets/img/hero2.PNG" class="img-fluid" alt="">
        </div>

          <div class="col-lg-6">
            <form action="<?= site_url('auth/registrasi')?>" method="POST">
              <div class="form-group mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama1">
                <?= form_error('nama1','<small class="form-text text-danger">', '</small>')?>
              </div>
              <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email1">
                 <?= form_error('email1','<small class="form-text text-danger">', '</small>')?>
              </div>
              <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password1">
                 <?= form_error('password1','<small class="form-text text-danger">', '</small>')?>
              </div>
              <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Dusun anda</label>
                <select class="form-control" id="exampleFormControlSelect1" name="dusun">
                  <?php foreach ($rows as $row):?>
                  <option value="<?= $row->id_dusun?>"><?= $row->nama?></option>
                  <?php endforeach?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Custom by <a href="https://bootstrapmade.com/">Kelompk kami</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- jQuery 3 -->
  <script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>FLexStart/assets/js/main.js"></script>

</body>

</html>