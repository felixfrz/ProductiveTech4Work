<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
    h1 {
        text-align: center;
        font-family: Calibri;
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

<body style="background-color: teal;">

    <h1>Cakes</h1>
    <div class="container">
        <?php echo $output; ?>
    </div>
    <!-- Compiled and minified JavaScript -->

</body>

</html>