<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <style>
    h1 {
        text-align: center;
        font-family: Calibri;
    }

    .product_tech {
        margin-top: 100px !important;
    }
    </style>
    <?php
    foreach ($css_files as $file) : ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach ($js_files as $file) : ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</head>

<body class="mt-5" ">
    <div id=" layoutSidenav_content " class=" product_tech">
    <main class=" mt-5 mt-5">
        <div class="container-fluid px-4 mt-5">
            <!-- <h1 class=" mt-4 display-5">Dashboard</h1> -->


            <h1 class="mt-4" style="padding-top: 50px;" id="dev">Productivity Technologies</h1>
            <p class="bold"><?php
                            if ($this->session->userdata('UserLoginSession')) {
                                $udata = $this->session->userdata('UserLoginSession');
                                echo 'Welcome' . ' ' . $udata['username'];
                            } else {
                                redirect(base_url('main/index'));
                            }



                            ?>
                <a href="<?= base_url('main/logout') ?>">Logout</a>
            </p>
            <div>
                <?php echo $output; ?>
            </div>
        </div>
    </main>
</body>

</html>