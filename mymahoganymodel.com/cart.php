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
                <li><a href="category.html">Category</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart </span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <h4 class="caps"><a href="category.html"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">
                    <div class="cartContent w100">
                        <table class="cartTable table-responsive" style="width:100%">
                            <tbody>

                            <tr class="CartProduct cartTableHeader">
                                <td style="width:15%">Product</td>
                                <td style="width:40%">Details</td>
                                <td style="width:10%" class="delete">&nbsp;</td>
                                <td style="width:10%">QNT</td>
                                <td style="width:10%">Discount</td>
                                <td style="width:15%">Total</td>
                            </tr>

                            <tr class="CartProduct">
                                <td class="CartProductThumb">
                                    <div><a href="product-details-style4.html"><img src="images/product/a1.jpg" alt="img"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="CartDescription">
                                        <h4><a href="product-details-style4.html">Denim Airbus A380 Virgin Atlantic </a></h4>
                                        <span class="size">12 x 1.5 L</span>

                                        <div class="price"><span>$8.80</span></div>
                                    </div>
                                </td>
                                <td class="delete"><a title="Delete"> <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                <td><input class="quanitySniper" type="text" value="2" name="quanitySniper"></td>
                                <td>0</td>
                                <td class="price">$300</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--cartContent-->

                    <div class="cartFooter w100">
                        <div class="box-footer">
                            <div class="pull-left"><a href="index.html" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-default"><i class="fa fa-undo"></i> &nbsp; Update
                                    cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/ cartFooter -->

                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <div class="contentBox">
                <div class="w100 costDetails">
                    <div class="table-block" id="order-detail-content">

                        <div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                <tbody>
                                <tr>
                                    <td>Total products</td>
                                    <td class="price">$216.51</td>
                                </tr>
                                <tr style="">
                                    <td>Shipping</td>
                                    <td class="price">$216.51</td>
                                </tr>
                                <tr>
                                    <td> Total</td>
                                    <td class=" site-color" id="total-price">$216.51</td>
                                </tr>

                                </tbody>
                                <tbody>
                                </tbody>
                            </table>

                            <a class="btn btn-primary btn-lg btn-block " title="checkout" href="checkout-0.html" style="margin-bottom:20px">
                                Proceed to checkout &nbsp; <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular -->

        </div>
        <!--/rightSidebar-->

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


