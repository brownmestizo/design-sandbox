    <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
        <h3 class="section-title style2 text-center"><span>FEATURED PRODUCTS</span></h3>

        <div class="container">   
            <div class="row xsResponse">
            
                    <?php                    
                        $products = new TblProdInfoQuery();
                        $featuredProducts = $products->filterByProdFront('yes')->forThisWebsiteOnly()->find();
                        foreach ($featuredProducts as $featuredProduct) {
                    ?>                         
                        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="product">
                                <!--
                                <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                    <i class="glyphicon glyphicon-heart"></i>
                                </a>
                                -->
                                <div class="image">
                                    <div class="quickview">
                                        <a title="Quick View" class="btn btn-xs btn-quickview" data-target="#product-details-modal" data-toggle="modal" id="<?= $featuredProduct->getProdId() ?>"> Quick View </a>
                                    </div>
                                    <a href="product.php?id=<?= $featuredProduct->getProdId() ?>">                                                                  
                                        <img src="{{ image_url }}<?= $featuredProduct->getTblProdPhotos()->getProdSolo1() ?>" alt="img" class="img-responsive">
                                    </a>
                                    
                                    <!--
                                        <div class="promotion">
                                            <span class="new-product">NEW</span>
                                            <span class="discount">15% OFF</span>
                                        </div>
                                    -->
                                </div>

                                <div class="description">
                                    <h4><a href="product.php?id=<?= $featuredProduct->getProdId() ?>"><?= $featuredProduct->getProdName() ?></a></h4>
                                    
                                    <?php 
                                        if ($featuredProduct->getProdSaveAs== 1) 
                                            echo '<p>This product has a smaller model version</p>';
                                    ?>

                                    </div>
                                <div class="price">
                                    <span>$<?= $featuredProduct->getTblProdPricing()->getProdPricePrice() ?></span> 
                                    <!-- <span class="old-price">$75</span> -->
                                </div> 

                                <div class="action-control">
                                    <a class="btn btn-primary">
                                        <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/.item-->
                    <?php
                        }
                    ?>

            </div>
            <!-- /.row -->

            <!--
            <div class="row">
                <div class="load-more-block text-center">
                    <a class="btn btn-thin" href="#">
                        <i class="fa fa-plus-sign">+</i> load more products</a>
                </div>
            </div>
            -->

        </div>
        <!--/.container-->
    </div>