<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <!--
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">

                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <li>
                                <a href="#">
                                    <span class="hidden-xs">HELP</span>
                                    <i class="glyphicon glyphicon-info-sign hide visible-xs "></i>
                                </a>
                            </li>
                            <li class="phone-number">
                                <a href="callto:+88016000000">
                                    <span> <i class="glyphicon glyphicon-phone-alt "></i></span>
                                    <span class="hidden-xs" style="margin-left:5px"> 88 01680 53 1352 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li>
                                <a href="account-1.html">
                                    <span class="hidden-xs"> My Account</span>
                                    <i class="glyphicon glyphicon-user hide visible-xs "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#ModalLogin">
                                    <span class="hidden-xs">Sign In</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" data-toggle="modal" data-target="#ModalSignup">
                                    Create Account
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->


    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span>
                <span class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart">
                <i class="fa fa-shopping-cart colorWhite"> </i>
                <span class="cartRespons colorWhite"> Cart ($210.00) </span></button>
            <a class="navbar-brand " href="index.php"> <img src="../images/logo.png" alt="Modelbuffs"> </a>
        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class="navbar-cart  collapse">
            <div class="cartMenu static-search-box  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">                    
                    <table>
                        <tbody>                        
                            <tr class="miniCartProduct">
                                <td style="20%" class="miniCartProductThumb">
                                    <div><a href="product-details-style4.html"> <img src="../images/product/3.jpg" alt="img"> </a>
                                    </div>
                                </td>
                                <td style="40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="product-details-style4.html">Aermacchi M-346 Italian Air Force</a></h4>


                                        <div class="price"><span> $8.80 </span></div>
                                    </div>
                                </td>
                                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                                <td style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                                <td style="5%" class="delete"><a> x </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--/.miniCartTable-->

                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                    <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a>
                    <a href="checkout-0.html" class="btn btn-sm btn-primary"> CHECKOUT </a>
                </div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">


            <ul class="nav navbar-nav">
                <li class="active"><a href="#"> Home </a></li>
                <li class="dropdown megamenu-fullwidth">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"> New Products <b class="caret"> </b> </a>

                    <ul class="dropdown-menu">
                        <li class="megamenu-content">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li class="no-border">
                                    <p class="promo-1"><strong> New Products </strong></p>
                                </li>
                                <li><a href="category.html"> All New Products </a></li>
                                <li><a href="category.html"> New Aviation Oil Paintings </a></li>
                                <li><a href="category.html"> New Helicopters </a></li>
                                <li><a href="category.html"> New Private & Civilian Models</a></li>
                                <li><a href="category.html"> New Specials </a></li>
                            </ul>

                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li>
                                    <a class="newProductMenuBlock" href="product-details-style4.html">
                                        <img class="img-responsive" src="../images/site/promo1.jpg" alt="product">
                                        <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> Aviation Oil Paintings </span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li>
                                    <a class="newProductMenuBlock" href="product-details-style4.html">
                                        <img class="img-responsive" src="../images/site/promo2.jpg" alt="product">
                                        <span class="ProductMenuCaption"><i class="fa fa-caret-right"> </i> Helicopters</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li>
                                    <a class="newProductMenuBlock" href="product-details-style4.html">
                                        <img class="img-responsive" src="../images/site/promo3.jpg" alt="product">
                                        <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> Specials </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class="dropdown megamenu-80width ">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"> SHOP<b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">

                            <!-- megamenu-content -->

                            <ul class="col-lg-6  col-sm-2 col-md-2 unstyled noMarginLeft">
                                <li><a href="category.php?category=13"> Airships and Blimps </a></li>
                                <li><a href="category.php?category=7"> Nose Art Panels </a></li>
                                <li><a href="category.php?category=14"> Aviation Oil Paintings </a></li>
                                <li><a href="category.php?category=15"> Boats, Ships & Submarines</a></li>
                                <li><a href="category.php?category=5"> Early Aviation - Pre-1950 </a></li>
                                <li><a href="category.php?category=4"> Helicopters </a></li>
                                <li><a href="category.php?category=9"> Made to Order Models </a></li>
                                <li><a href="category.php?category=16"> Tanks & Armored Vehicles </a></li>
                            </ul>
                            <ul class="col-lg-6  col-sm-2 col-md-2 unstyled">
                                <li><a href="category.php?category=2"> Military Airplanes - Jet </a></li>
                                <li><a href="category.php?category=1"> Military Airplanes - Propeller</a></li>
                                <li><a href="category.php?category=3"> Private & Civilian </a></li>
                                <li><a href="category.php?category=10"> Sale Clearance Items </a></li>
                                <li><a href="category.php?category=6"> Space, NASA & Experimental</a></li>
                                <li><a href="category.php?category=12"> Specials </a></li>
                                <li><a href="category.php?category=8"> Tail Shields & Flashes, Plaques & Seals</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- this part for mobile -->
            <div class="search-box static-search  w100 hidden-lg hidden-md hidden-sm navbar-formbox navbar-right">
                <div style="clear:both"></div>
                <form id="search-form" method="GET" action="#" role="search" class="navbar-form">
                    <div class="input-group">
                        <input type="text" style="padding:6px 6px;" name="q" placeholder="Search..."
                               class="form-control">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="input-group hide">
                    <button class="btn btn-nobg" type="button"><i class="fa fa-search"> </i></button>
                </div>
                <!-- /input-group -->
                <!-- /input-group -->

            </div>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="dropdown  cartMenu static-search-box">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart"> </i>
                        <span class="cartRespons"> Cart ($210.00) </span> <b class="caret"> </b>
                    </a>

                    <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
                        <div class="w100 miniCartTable scroll-pane">
                            <table>
                                <tbody>
                                <?php for ($i=1; $i<=6; $i++) { ?>
                                    <tr class="miniCartProduct">
                                        <td style="width:20%" class="miniCartProductThumb">
                                            <div><a href="product-details-style4.html"> <img src="../images/product/3.jpg" alt="img">
                                            </a></div>
                                        </td>
                                        <td style="width:40%">
                                            <div class="miniCartDescription">
                                                <h4><a href="product-details-style4.html">Aermacchi M-346 Italian Air Force</a></h4>
                                                <div class="price"><span> $22 </span></div>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                        <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                                        <td style="width:5%" class="delete"><a> x </a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!--/.miniCartTable-->

                        <div class="miniCartFooter text-right">
                            <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                            <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a>
                            <a href="checkout-0.html" class="btn btn-sm btn-primary"> CHECKOUT </a>
                        </div>
                        <!--/.miniCartFooter-->

                    </div>
                    <!--/.dropdown-menu-->
                </div>
                <!--/.cartMenu-->

                <div class="search-box static-search pull-right">

                    <form id="search-form" method="GET" action="#" role="search" class="navbar-form">
                        <div class="input-group">
                            <input type="text" style="padding:6px 6px;" name="q" placeholder="Search..." class="form-control">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <!-- /input-group -->

                </div>
                <!--/.search-box -->
            </div>
            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->
</div>
<!-- /.Fixed navbar  -->
