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


<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Authentication</li>
            </ul>
        </div>
    </div>
    <!-- /.row -->


    <div class="row">

        <div class="col-lg-12 col-md-12  col-sm-12">

            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Authentication</span></h1>

            <div class="row userInfo">
                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"> Create an account </h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn   btn-primary"><i class="fa fa-user"></i> Create an account
                        </button>
                    </form>
                </div>


                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"><span>Already registered?</span></h2>

                    <form role="form">
                        <div class="form-group">
                            <label for="InputEmail2">Email address</label>
                            <input type="email" class="form-control" id="InputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword2">Password</label>
                            <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox">
                                Remember me </label>
                        </div>
                        <div class="form-group">
                            <p><a title="Recover your forgotten password" href="forgot-password.html">Forgot your
                                password? </a></p>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Sign In</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h2 class="block-title-2"><span>Checkout as Guest</span></h2>

                    <p>Don't have an account and you don't want to register? Checkout as a guest instead!</p>
                    <a href="checkout-1.html" class="btn btn-primary"><i class="fa fa-sign-in"></i> Checkout as
                        Guest</a></div>
            </div>
            <!--/row end-->

        </div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container -->

<div class="gap"></div>

<?php include_once('components/footer.php') ?>
<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
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

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>

