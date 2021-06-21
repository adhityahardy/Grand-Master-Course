<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <link rel="icon" href="<?= base_url('assets'); ?>/about/favicon.ico" /> -->
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

    <title>GM Course | About</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets'); ?>/about/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        /* GLOBAL STYLES
-------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
            min-height: 75rem;
        }

        /* CUSTOMIZE THE CAROUSEL
      -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 9rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }

        /* MARKETING CONTENT
      -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: 0.75rem;
            margin-left: 0.75rem;
        }

        /* Featurettes
      ------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.05rem;
        }

        /* RESPONSIVE CSS
      -------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
</head>

<body>
    <nav class="nav fixed-top">
        <div class="container">
            <h1 class="logo"><a href="/Grand-Master-Course">Grand Master Course </a></h1>
            <ul>
                <li><a href="/Grand-Master-Course" class="current">Home</a></li>
                <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                <li><a href="<?= base_url('auth/registration'); ?>">Registration</a></li>
                <li><a href="<?= base_url('about'); ?>">About</a></li>
            </ul>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>About Us</h1>
                        <p>
                            Here you can find out who the founder of this company is, so that this company can stand as far and big until now, enjoy!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" />

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Rakhmat Rifaldy<br>Founder</br>
                </h2>
                <p class="lead">
                    May the father of understanding guide us
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/img/aldy.jpg" alt="Generic placeholder image" />
            </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">
                    Achmad Alfansyah Nasution<br>Manager</br>
                </h2>
                <p class="lead">
                    Do the effort, and feel the results, don't ever give up!
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/img/hehe.jpg" alt="Generic placeholder image" />
            </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Adhitya Aldira Hardy <br>Engineer</br>
                </h2>
                <p class="lead">
                    Education is not the learning of facts, but the training of the mind to think.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/img/padang.jpg" alt="Generic placeholder image" />
            </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">
                    Haura Athaya Salka<br>Database Engineer</br>
                </h2>
                <p class="lead">
                    I am not afraid of storms, for I am learning how to sail my ship
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="<?= base_url('assets'); ?>/img/hau.jpg" alt="Generic placeholder image" />
            </div>
        </div>

        <hr class="featurette-divider" />
        <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

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
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?= base_url('assets'); ?>/about/vendor/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/about/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?= base_url('assets'); ?>/about/vendor/holder.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/landingscript.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>

</body>

</html>