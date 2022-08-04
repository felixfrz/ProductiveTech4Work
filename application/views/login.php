<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Productive Tech</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="../../tech/assets/ui/assets/img/favicon.png" rel="icon">
    <link href="../../tech/assets/ui/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../tech/assets/ui/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../tech/assets/ui/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/ui/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/ui/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../../../assets/ui/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../../tech/assets/ui/assets/css/style.css" rel="stylesheet">
    <link href="../../assets/ui/assets/css/style.css" rel="stylesheet">
    <link href="../../../assets/ui/assets/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center mb-5">
        <div class="container d-flex align-items-center">

            <h3 class="logo me-auto h4"><a href="<?php echo site_url('main/index') ?>"> <span>Productive <u>Tech</u>
                    </span>
                    <span class="display-3" style="color: #d9232d;">4</span><u>work</u><span
                        style="color: #d9232d;">&trade;</span> </a></h3>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo site_url('main/index') ?>" class="active">Home</a></li>

                    <li class="dropdown"><a href="<?php echo site_url('main/login') ?>"><span>Login</span></a>
                    </li>

                    <li><a href="<?php echo site_url('main/team') ?>">Team</a></li>

                    <li><a href="<?php echo site_url('main/contact') ?>">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 100px;">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>SIGN IN</h2>
                    <ol>
                        <li><a href="<?php echo site_url('main/index') ?>">Home</a></li>
                        <li>Sign In</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <!-- End Team Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card" style="margin-top: 30px">
                        <div class="card-header text-center">
                            Login Now
                        </div>
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error')) {    ?>
                            <div class=" alert alert-danger alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">
                                <?= $this->session->flashdata('error'); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php } ?>
                            <form method="post" autocomplete="off" action="<?= base_url('main/loginnow') ?>">

                                <div class="mb-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" placeholder="User Password"
                                        class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-danger">Login Now</button>
                                </div>



                            </form>
                            <p class="text-center mt-3 text-secondary bg-white">If you do not have an account,
                                Please <a href="<?= base_url('main/index') ?>">Register Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main><!-- End #main -->



    <!-- Vendor JS Files -->
    <script src="../../tech/assets/ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../tech/assets/ui/assets/vendor/php-email-form/validate.js"></script>
    <!-- Vendor JS Files -->
    <script src="../../assets/ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/ui/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/ui/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/ui/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../assets/ui/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../assets/ui/assets/vendor/php-email-form/validate.js"></script>
    <!-- Vendor JS Files -->
    <script src="../../../assets/ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/ui/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../../assets/ui/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../../assets/ui/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../../assets/ui/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../../assets/ui/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../tech/assets/ui/assets/js/main.js"></script>
    <!-- Template Main JS File -->
    <script src="../../assets/ui/assets/js/main.js"></script>
    <!-- Template Main JS File -->
    <script src="../../../assets/ui/assets/js/main.js"></script>

</body>

</html>