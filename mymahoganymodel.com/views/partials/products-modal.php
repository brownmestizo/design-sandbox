<!-- Product Details Modal  -->
<div class="modal fade" id="product-details-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"> ×</button>
            <div class="col-lg-5 col-md-5 col-sm-5  col-xs-12">

                <!-- product Image -->

                <div class="main-image  col-lg-12 no-padding style3">
                    <a class="product-largeimg-link" href="product-details-style4.html">
                        <img src="../images/zoom/zoom1.jpg" class="img-responsive product-largeimg prod-solo-1" alt="img">
                    </a>
                </div>
                <!--/.main-image-->

                <div class="modal-product-thumb">
                    <a class="thumbLink selected">
                        <img data-large="../images/zoom/zoom1.jpg" alt="img" class="img-responsive prod-solo-2" src="../images/zoom/zoom1.jpg">
                    </a>
                    <a class="thumbLink">
                        <img data-large="../images/zoom/zoom2.jpg" alt="img" class="img-responsive prod-solo-3" src="../images/zoom/zoom2.jpg">
                    </a>
                    <a class="thumbLink">
                        <img data-large="../images/zoom/zoom3.jpg" alt="img" class="img-responsive prod-solo-4" src="../images/zoom/zoom3.jpg">
                    </a>
                </div>
                <!--/.modal-product-thumb-->
            </div>
            <!--/ product Image-->


            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 modal-details no-padding">
                <div class="modal-details-inner">
                    <h1 class="product-title">[Product Name1]</h1>

                    <h3>Product Code : <span class="product-code">[Code]</span></h3>

                    <div class="product-price"><span class="price-sales">Starting at $<span class="product-starting-price"></span> </span> </div>
                    <div class="details-description product-description ellipsis" style="max-height: 60px; overflow:hidden; word-wrap: break-word;">
                        [Product Description]
                    </div>
                    <!--/.color-details-->

                    <div class="productFilter productFilterLook2">
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
                    </div>
                    <!-- productFilter -->

                    <div class="cart-actions">
                        <div class="addto">
                            <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first"
                                    title="Add to Cart" type="button">Add to Cart
                            </button>
                            <!-- <a class="link-wishlist wishlist">Add to Wishlist</a> -->
                        </div>
                    </div>
                    <!--/.cart-actions-->

                    <div class="product-share clearfix">
                        <p> SHARE </p>

                        <div class="socialIcon">
                            <a href="#"> <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#"> <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#"> <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#"> <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                    <!--/.product-share-->
                </div>
                <!--/.modal-details-inner-->
            </div>
            <!--/.modal-details-->
            <div class="clear"></div>
        </div>
        <!--/.modal-content-->
    </div>
    <!--/.modal-content-->
</div>
<!-- End Modal -->