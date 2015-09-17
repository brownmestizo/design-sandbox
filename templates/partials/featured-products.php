    <!-- Main component call to action -->
    <div class="row featuredPostContainer globalPadding style2">
        <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>

        <div id="productslider" class="owl-carousel owl-theme">

                {% for newProduct in newProducts %}
                <div class="item">
                    <div class="product">
                        <!--
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        -->
                        <div class="image">
                            <div class="quickview">
                                <a title="Quick View" class="btn btn-xs btn-quickview" data-target="#product-details-modal" data-toggle="modal" id="{{ newProduct.getProdId() }}"> Quick View </a>
                            </div>
                            <a href="product.php?id={{ newProduct.getProdId() }}">      
                                <img src="http://modelbuffs.com/mpm/uploads/{{ newProduct.getTblProdPhotos().getProdSolo1() }}" alt="img" class="img-responsive">
                            </a>
                        </div>

                        <div class="description">
                            <h4>
                                <a href="product.php?id={{ newProduct.getProdId() }}">{{ newProduct.getProdName() }}</a>
                            </h4>
                            {% if newProduct.getProdSaveAs() == 1 %}
                                <p>This product has a smaller model version</p>
                            {% endif %}                                
                        </div>

                        <div class="price">
                            <span>${{ newProduct.getTblProdPricing().getProdPricePrice() }}</span> 
                            <!-- <span class="old-price">$75</span> -->
                        </div> 

                        <div class="action-control">
                            <a class="btn btn-primary">
                                <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
                            </a>
                        </div>

                            <!--
                                <div class="promotion">
                                    <span class="new-product">NEW</span>
                                    <span class="discount">15% OFF</span>
                                </div>
                            -->
                        
                    </div>
                </div>
                {% endfor %}

        </div>
        <!--/.productslider-->
    </div>
    <!--/.featuredPostContainer-->