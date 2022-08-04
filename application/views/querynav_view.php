<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <style>
    h1 {
        text-align: center;
        font-family: Calibri;
    }

    .query {
        margin-top: 100px;
    }
    </style>
</head>

<body class="container">

    <h1 class="query">Queries</h1>
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
    <div align='center'>
        <button class="btn btn-lg btn-danger" type="submit"
            onclick="location.href='<?php echo site_url('main/query1') ?>'">Total
            Developers
            Technologies</button>
        <button class="btn btn-lg btn-dark" type="submit"
            onclick="location.href='<?php echo site_url('main/query2') ?>'">Ranked Technologies by
            Ratings</button>
    </div>

</body>

</html>