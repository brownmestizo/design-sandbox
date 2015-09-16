<?php require_once 'lib/init.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Modelbuffs Version 4 </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- gall-item Gallery for gallery page -->
    <link href="assets/plugins/magnific/magnific-popup.css" rel="stylesheet">

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

<?php include_once('templates/partials/modal-login.php') ?>
<?php include_once('templates/partials/modal-signup.php') ?>
<?php include_once('templates/partials/navbar.php') ?>


<div class="container main-container headerOffset">
    
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Military Airplanes Propeller</li>
            </ul>
        </div>
    </div>


        <?php                    
            $productQuery = new TblProdInfoQuery();
            $product = $productQuery->findPK($_GET['id']);
        ?>     

        <div class="row transitionfx">

            <!-- left column -->

            <div class="col-lg-6 col-md-6 col-sm-6 productImageZoom">

                <div class='zoom' id='zoomContent'>                    
                    <a class="gall-item" title="product-title" href="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo1() ?>">
                        <img class="zoomImage1 img-responsive" data-src="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo1() ?>" src="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo1() ?>" alt="<?= $product->getProdName() ?>" />
                    </a>
                </div>


                <div class="zoomThumb ">
                    <a class="zoomThumbLink">
                        <img data-large="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo1() ?>" src="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo1() ?>" alt="Saleen" title=""/>
                    </a>

                    <a class="zoomThumbLink">
                        <img data-large="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo2() ?>" src="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo2() ?>" alt="Saleen" title=""/>
                    </a>

                    <a class="zoomThumbLink">
                        <img data-large="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo3() ?>" src="http://modelbuffs.com/mpm/uploads/<?= $product->getTblProdPhotos()->getProdSolo3() ?>" alt="Saleen" title=""/>
                    </a>
                </div>

            </div>
            <!--/ left column end -->


            <!-- right column -->
            <div class="col-lg-6 col-md-6 col-sm-5">

                <h1 class="product-title"><?= $product->getProdName() ?></h1>

                <h3 class="product-code">Product Code : <?= $product->getProdCode() ?></h3>

                <!--
                <div class="rating">
                    <p>
                        <span>
                            <i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star-o "></i></span> <span class="ratingInfo"> 
                            <span> / </span> 
                            <a data-toggle="modal" data-target="#modal-review"> Write a review</a>
                        </span>
                    </p>
                </div>
                -->

                <div class="product-price">
                    <span class="price-sales">Starting at $<?= $product->getTblProdPricing()->getProdPricePrice() ?></span>
                </div>

                <div class="details-description">
                    <p>Shipping and choice of stand may increase the price of this model.</p>
                </div>

                <div class="productFilter">
                    <div class="filterBox">
                        <select>
                            <option value="strawberries" selected>Quantity</option>
                            <option value="mango">1</option>
                            <option value="bananas">2</option>
                            <option value="watermelon">3</option>
                            <option value="grapes">4</option>
                            <option value="oranges">5</option>
                            <option value="pineapple">6</option>
                            <option value="peaches">7</option>
                            <option value="cherries">8</option>
                        </select>
                    </div>
                    <div class="filterBox">
                        <select>
                            <option value="" selected>Stands</option>
                            <option value="1">Solid Mahogany with Stainless Steel Arm</option>
                            <option value="2">Solid Mahogany</option>
                            <option value="3">Solid Mahogany Oblong with Stainless Steel Arm</option>
                            <option value="4">Solid Mahogany Matte Black</option>
                            <option value="5">Solid Mahogany Black with Customized Logo</option>
                        </select>
                    </div>
                </div>
                <!-- productFilter -->

                <div class="cart-actions">
                    <div class="addto">
                        <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first"
                                title="Add to Cart" type="button">Add to Cart
                        </button>
                        <!-- <a class="link-wishlist wishlist">Add to Wishlist</a> -->
                    </div>

                    <div style="clear:both"></div>

                    <h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i> In stock</h3>
                    <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i> Out of stock</h3>
                    <h3 class="incaps"><i class="glyphicon glyphicon-lock"></i> Secure online ordering</h3>
                </div>
                <!--/.cart-actions-->

                <div class="clear"></div>

                <div class="product-tab w100 clearfix">

                    <ul class="nav nav-tabs">
                        <?php if($product->getProdWriteup()) :  ?>
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                        <?php endif; ?>
                        
                        <?php if($product->getProdGeneral()) : ?>
                            <li><a href="#size" data-toggle="tab">General Product Information</a></li>
                        <?php endif; ?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php if($product->getProdWriteup()) : ?>
                            <div class="tab-pane active" id="details">
                                <?= $product->getProdWriteup() ?>
                            </div>
                        <?php endif; ?>

                        <?php if($product->getProdGeneral()) : ?>
                            <div class="tab-pane" id="size"> 
                                <?php $alternateNames = array($product->getProdName(), $product->getProdAlt1(), $product->getProdAlt2(), $product->getProdAlt3(), $product->getProdAlt4()); ?>
                                <?= $product->getTblGeneral()->getProdDescription($alternateNames) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.tab content -->

                </div>
                <!--/.product-tab-->

                <div style="clear:both"></div>

                <div class="product-share clearfix">
                    <p> SHARE </p>

                    <div class="socialIcon">
                        <a href="#"> <i class="fa fa-facebook"></i></a>
                        <a href="#"> <i class="fa fa-twitter"></i></a>
                        <a href="#"> <i class="fa fa-google-plus"></i></a>
                        <a href="#"> <i class="fa fa-pinterest"></i></a></div>
                </div>
                <!--/.product-share-->

            </div>
            <!--/ right column end -->
        </div>
        <!--/.row-->

        <?php 

            $relatedProducts = TblProdInfoQuery::create()->findPKs(explode(" ", $product->getProdRelated())); 

            if ($product->getProdRelated()) {
        ?>
                <div class="row recommended">

                    <h1> YOU MAY ALSO LIKE </h1>

                    <div id="SimilarProductSlider">

                        <?php                                        
                            
                            foreach ($relatedProducts as $relatedProduct) {
                        ?>    
                                <div class="item">
                                    <div class="product"><a class="product-image"> 
                                        <img src="http://modelbuffs.com/mpm/uploads/<?= $relatedProduct->getTblProdPhotos()->getProdSolo1() ?>" alt="img"> </a>
                                        <div class="description">
                                            <h4><a href="product.php?id=<?= $relatedProduct->getProdId() ?>"><?= $relatedProduct->getProdName() ?></a></h4>
                                            <div class="price">
                                                Starting at 
                                                <span>$<?= $relatedProduct->getTblProdPricing()->getProdPricePrice() ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.item-->
                        <?php
                            }
                        ?>

                    </div>
                    <!--/.recommended-->
                </div>
        <?php 
            }
        ?>


    <div style="clear:both"></div>


</div>
<!-- /main-container -->


<div class="gap"></div>


<?php include_once('templates/partials/footer.php') ?>



<!-- Modal review start -->
<div class="modal  fade" id="modal-review" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center">PRODUCT REVIEW </h3>
            </div>
            <div class="modal-body">

                <h3 class="reviewtitle uppercase">You're reviewing: Lorem ipsum dolor sit amet</h3>

                <form>
                    <div class="form-group">
                        <label>
                            How do you rate this product? </label> <br>

                        <div class="rating-here">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star fa-2x"
                                   data-empty="fa fa-star-o fa-2x" data-fractions="3"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rtext">Name</label>
                        <input type="text" class="form-control" id="rtext" placeholder="Your name" required>
                    </div>

                    <div class="form-group ">
                        <label>Review</label>
                        <textarea class="form-control" rows="3" placeholder="Your Review" required></textarea>

                    </div>


                    <button type="submit" class="btn btn-dark">Submit Review</button>
                </form>


            </div>

        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.Modal review -->


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

<script src='assets/js/jquery.zoom.js'></script>
<script>
    $(document).ready(function () {
        //$('.swipebox').zoom();

        $('#zoomContent').zoom();
        $(".zoomThumb a").click(function () {
            var largeImage = $(this).find("img").attr('data-large');
            $(".zoomImage1").attr('src', largeImage);
            $(".zoomImg").attr('src', largeImage);
            $(".gall-item").attr('href', largeImage);

        });


        $('.gall-item').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        $("#zoomContent").click(function () {
            //alert();
            $('.gall-item').trigger('click');
        });

        // CHANGE IMAGE MODAL THUMB

        $(".product-thumbList a").click(function () {
            var largeImage = $(this).find("img").attr('data-large');
            $(".mainImg").attr('src', largeImage);

        });

    });
</script>

<script src="assets/plugins/magnific/jquery.magnific-popup.min.js"></script>

<!-- jQuery minimalect // custom select   -->
<script src="assets/js/jquery.minimalect.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>


<script src="assets/plugins/rating/bootstrap-rating.min.js"></script>
<script>
    $(function () {

        $('.rating-tooltip-manual').rating({
            extendSymbol: function () {
                var title;
                $(this).tooltip({
                    container: 'body',
                    placement: 'bottom',
                    trigger: 'manual',
                    title: function () {
                        return title;
                    }
                });
                $(this).on('rating.rateenter', function (e, rate) {
                    title = rate;
                    $(this).tooltip('show');
                })
                        .on('rating.rateleave', function () {
                            $(this).tooltip('hide');
                        });
            }
        });

    });
</script>


</body>
</html>
