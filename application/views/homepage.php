<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Productive Tech</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="../../tech/assets/ui/assets/img/logo.png" rel="icon">
    <link href="../../tech/assets/ui/assets/img/logo.png" rel="apple-touch-icon"> -->


    <style>
    html {

        background-color: white;
        color: black;

    }

    .dark-mode {
        background-color: #333 !important;
        color: white !important;
    }
    </style>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../tech/assets/ui/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../tech/assets/ui/assets/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="padding: 10px 0;">
        <div class="container d-flex align-items-center">

            <h3 class="logo me-auto" style="font-size: 1.25rem;"><a href="<?php echo site_url('main/index') ?>">
                    <span>Productive <u>Tech</u>
                    </span>
                    <span class="display-3" style="color: #d9232d;">4</span><u>work</u><span
                        style="color: #d9232d;">&trade;</span> </a></h3>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="../../tech/assets/ui/assets/img/log.gif" alt=" logo"
                    class="img-fluid"></a> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo site_url('main/index') ?>" class="active">HOME</a></li>
                    <li><a href="<?php echo site_url('main/login') ?>">SIGN IN</a></li>
                    <li><a href="<?php echo site_url('main/team') ?>">TEAM</a></li>

                    <li><a href="<?php echo site_url('main/contact') ?>">CONTACT</a></li>
                    <!-- <li><a href="index.html" class="getstarted">Get Started</a></li> -->

                    <div class="px-5 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            onclick="darkMode()">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Dark Mode</label>
                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section style="height: 90vh;" id="hero">
        <div id="heroCarousel" data-bs-interval="6000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url(../../tech/assets/ui/assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Productive Tech 4
                                    Work</span></h2>
                            <!-- ======Registration=======-->


                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-6 offset-md-2">
                                        <div class="signup-form">
                                            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                            <form class="mt-5 border p-4 bg-light shadow" method="post"
                                                autocomplete="off" action="<?= base_url('main/registerNow') ?>">
                                                <?php
                                                if ($this->session->flashdata('success')) {    ?>
                                                <div class=" alert alert-success text-center alert-dismissible fade show"
                                                    role="alert" style="margin-top: 10px;">
                                                    <?= $this->session->flashdata('success'); ?>

                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?php } ?>
                                                <?php
                                                if ($this->session->flashdata('error')) {    ?>
                                                <div class=" alert alert-danger text-center alert-dismissible fade show"
                                                    role="alert" style="margin-top: 10px;">
                                                    <?= $this->session->flashdata('error'); ?>

                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?php } ?>
                                                <h4 class="mb-5 text-secondary">Create Your Account</h4>
                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label for="username">Name<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="username" id="username"
                                                            class="form-control" placeholder="Enter User Name">
                                                    </div>

                                                    <div class="mb-3 col-md-12">
                                                        <label for="email">Email<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="email" id="email" class="form-control"
                                                            placeholder="Enter Email">
                                                    </div>

                                                    <div class="mb-3 col-md-12">
                                                        <label for="password">Password<span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" placeholder="Enter Password">
                                                    </div>




                                                    <div class="col-md-12">
                                                        <button class="btn btn-danger float-end" name="register">
                                                            TRY IT OUT</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="text-center mt-3 text-secondary bg-white">If you have account,
                                                Please <a href="<?= base_url('main/login') ?>">Login Now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- ======End of Registration=======-->

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url(../../tech/assets/ui/assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Develop a better labour force by the
                                second
                            </h2>
                            <p class="animate__animated animate__fadeInUp">Employee-friendly, technology rating and
                                productivity insights that enable teams to do their best work.</p>

                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url(../../tech/assets/ui/assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Scalable Success With Software</h2>
                            <p class="animate__animated animate__fadeInUp">Productive Tech 4 Work removes the barriers
                                between your users and true productivity across all software.</p>

                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6"
                        style="background-image: url(https://website.whatfix.com/wp-content/uploads/2021/07/hero_4x5-home_1b.svg);background-repeat:no-repeat;  background-size:cover;">
                        <h2>Make Every Second Count</h2>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Automatic time tracking lets you know where the team excels and where it needs help so you
                            can easily improve individual and overall performance.


                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Easily view productivity trends organization-wide
                                consequa</li>
                            <li><i class="ri-check-double-line"></i> Leverage historic benchmarks and trends to inform
                                team goals</li>
                            <li><i class="ri-check-double-line"></i>Identify patterns of top performers</li>
                            <li><i class="ri-check-double-line"></i>Understand which distractions reduce focus</li>
                            <li><i class="ri-check-double-line"></i>Discover what technologies improve collaboration
                            </li>
                        </ul>
                        <p class="fst-italic">
                            With Productive Tech 4 work’s productivity insights you can understand how work gets done,
                            spotlight successful patterns and reduce distractions to make space for the work that
                            matters most.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-8.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-9.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="../../tech/assets/ui/assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-person-fill"></i>
                            <h4><a href="#">Better for Managers</a></h4>
                            <p>By measuring and analyzing how your team spends its time, you’ll be able to be more
                                engaged on each project, offering encouragement and stepping in when necessary. Plus,
                                our insight will help you recognize strong performers building morale across teams.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                            <h4><a href="#">Better for Employees</a></h4>
                            <p>When your employees see how tracking their time gives them valuable knowledge about their
                                strengths and weaknesses, when they are overwhelmed and when they are underutilized
                                you’ll be amazed at how productive, accountable and self directed they become.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                            <h4><a href="#">Better for the Organization</a></h4>
                            <p>Happy employees are productive employees so Productive Tech 4 Work facilitates their
                                happiness by enabling a “work from anywhere world” with full transparency and
                                accountability. Whether at home, in-office or on the road, they’ll work the way that
                                works best for both you and them.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-graph-up"></i>
                            <h4><a href="#">Maximizing Technology</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, debitis.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Productive Tech 4 Work</h3>
                            <p>
                                Room D410, College Lane, <br> University of Hertfordshire,

                                <br>United Kingdom<br>

                                <strong>Phone:</strong> +44 1234567890<br>
                                <strong>Email:</strong> team3@herts.ac.uk<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Employee Productivity</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Technology Ratings</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Developer</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to get weekly offers and services from Productive Tech 4 Work.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Productive Tech 4 Work</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Team 3</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../tech/assets/ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../tech/assets/ui/assets/js/main.js"></script>
    <script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>

</body>

</html>