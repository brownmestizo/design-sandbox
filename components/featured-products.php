    <!-- Main component call to action -->
    <div class="row featuredPostContainer globalPadding style2">
        <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>

        <div id="productslider" class="owl-carousel owl-theme">
            <?php for ($i=1; $i<=12; $i++) {?>
            <div class="item">
                <div class="product">
                    <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                        <i class="glyphicon glyphicon-heart"></i>
                    </a>

                    <div class="image">
                        <div class="quickview">
                            <a title="Quick View" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal">
                                Quick View
                            </a>
                        </div>

                        <a href="product-details-style4.html">
                            <img src="images/product/34.jpg" alt="img" class="img-responsive">
                        </a>

                        <div class="promotion">
                            <span class="new-product"> NEW</span>
                            <span class="discount">15% OFF</span>
                        </div>
                    </div>
                    <div class="description">
                        <h4><a href="product-details-style4.html">Aermacchi M-346 Italian Air Force</a></h4>
                        <p>This product has a smaller model version</p>
                    </div>

                    <div class="price"><span>$25</span></div>

                    <div class="action-control">
                        <a class="btn btn-primary">
                            <span class="add2cart">
                                <i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--/.productslider-->
    </div>
    <!--/.featuredPostContainer-->