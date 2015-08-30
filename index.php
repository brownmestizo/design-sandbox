<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Modelbuffs Version 4</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
</head>

<body>

<?php include_once('components/modal-login.php') ?>
<?php include_once('components/modal-signup.php') ?>
<?php include_once('components/navbar.php') ?>

<?php //include_once('components/banner.php') ?>

<div class="container main-container">

    <?php include_once('components/featured-products.php') ?>

</div>
<!-- /main container -->

<?php include_once('components/banner-medium.php') ?>

<div class="container main-container">

    <?php include_once('components/featured-products-grid.php') ?>
    <?php include_once('components/featured-collections.php') ?>
    <?php include_once('components/featured-vendors.php') ?>

</div>
<!--main-container-->


<?php include_once('components/parallax.php') ?>

<?php include_once('components/products-modal.php') ?>
<?php include_once('components/footer.php') ?>

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include jqueryCycle plugin -->
<script src="assets/js/jquery.cycle2.min.js"></script>

<!-- include easing plugin -->
<script src="assets/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include checkRadio plugin //Custom check & Radio  -->
<script type="text/javascript" src="assets/js/ion-checkRadio/ion.checkRadio.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- jQuery minimalect // custom select   -->
<script src="assets/js/jquery.minimalect.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for only homepage  -->
<script src="assets/js/home.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
<script>

</script>
</body>
</html>