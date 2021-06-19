<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/landingstyles.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jsgrid/jsgrid-theme.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <title>Grand Master Course: Best Place For Education</title>
</head>

<body style="bottom: 0;">
  <nav class="nav fixed-top">
    <div class="container">
      <h1 class="logo"><a href="#">Grand Master Course </a></h1>
      <ul>
        <li><a href="/Grand-Master-Course" class="current">Home</a></li>
        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
        <li><a href="<?= base_url('auth/registration'); ?>">Registration</a></li>
        <li><a href="<?= base_url('about'); ?>">About</a></li>
      </ul>
    </div>
  </nav>

  <!-- Header Content -->
  <div class="hero">
    <div class="container">
      <h1>Welcome to Grand Master Course</h1>
      <p>
        Knowledge design your personality. Tie yourself with education!
      </p>
    </div>
  </div>
  <!-- Header Content -->

  <!-- Container Content -->
  <section class="container content">
    <h2><b>About Us</b></h2>
    <p>Grand Master Course is an online tutor which provides student the best learning experience. Sign up now or never!</p>
    <h3>
      <center><b>Learn With Our Best Teachers!</center></b>
    </h3>
    <p></p>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="<?= base_url('assets'); ?>/img/meyzo.jpg" alt=" Card image cap" width="500" height="400">
        <div class="card-body">
          <h5 class="card-title">Mr. Meyzo || <b>Biology Teacher</b></h5>
          <p class="card-text">Learning biology is more fun and exciting with Mr. Meyzo!</p>
          <p><i>"Biology gives you brain, life turns it into a mind."</i></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?= base_url('assets'); ?>/img/pesal.png" alt=" Card image cap" width="500" height="400">
        <div class="card-body">
          <h5 class="card-title">Mr. Faishal || <b>Physics Teacher</b></h5>
          <p class="card-text">Hard time learning physics? Say no more with Mr. Faishal!</p>
          <p><i>"Two things are infinite: universe and human stupidity."</i></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?= base_url('assets'); ?>/img/thoriq.jpg" alt=" Card image cap" width="500" height="400">
        <div class="card-body">
          <h5 class="card-title">Mr. Thoriq || <b>Math Teacher</b></h5>
          <p class="card-text">Math is all about rainbows and sunshines with Mr. Thoriq!</p>
          <p><i>"Mathematics is the most beautiful and most powerful creation of the human spirit."</i></p>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Container Content -->

  <script src="<?= base_url('assets'); ?>/dist/js/landingscript.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">

    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block" style="background-color: white;">

      </div>
      <!-- Left -->

      <!-- Right -->
      <div>

      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold">
              <i class="fas fa-gem me-3"></i>Grand Master Course<i class="fas fa-gem me-3"></i>
            </h6>
            <p>
              Start your journey now! Get discount up to 50% for your first class.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold">
              Class
            </h6>
            <p>
              <a href="#!" class="text-reset">Biology</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Chemistry</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Physics</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Math</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Jalan Telekomunikasi, Bandung</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              grandmastercourse@edu.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: white;">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">GrandMasterCourse.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</body>

</html>