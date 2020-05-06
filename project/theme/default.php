<html>
<head lang="<?= lang() ?>" dir="rtl">
    <meta charset="<?= charset() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="<?= color() ?>"/>
    <link rel="icon" href="<?= logo() ?>">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/project/public/assets/assets/css/vendor/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="/project/public/assets/assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="/project/public/assets/assets/css/vendor/jquery.horizontalmenu.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="/project/public/assets/assets/css/vendor/materialdesignicons.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/project/public/assets/assets/css/main.css">
    <link rel="stylesheet" href="/project/public/assets/assets/css/colors/default.css" id="colorswitch">

    <!-- Core JS Files -->
    <script src="/project/public/assets/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="/project/public/assets/assets/js/vendor/popper.min.js"></script>
    <script src="/project/public/assets/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="/project/public/assets/assets/js/vendor/owl.carousel.min.js"></script>
    <script src="/project/public/assets/assets/js/vendor/jquery.horizontalmenu.js"></script>
    <!-- Main JS File -->
    <script src="/project/public/assets/assets/js/main.js"></script>
    <script src="/project/public/assets/assets/js/script.js"></script>
</head>
<body >

<?php require_once('header'.$prefix.'.php') ?>
<div id="content"><?= $content; ?></div>
<div id="foot"><?php require_once('footer'.$prefix.'.php') ?></div>
</body>
</html>