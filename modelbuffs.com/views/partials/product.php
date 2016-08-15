                    <div class="product">
                        
                        {% if product.getProdSaveAs() == 1 %}
                        <span class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="fa fa-star"></i>
                        </span>
                        {% endif %}                         
                        
                        <div class="image m-b-sm">                     
                            <a href="product.php?id={{ product.getProdId() }}">      
                                <img src="{{ image_url }}{{ product.getTblProdPhotos().getProdSolo1() }}" alt="img" class="img-responsive">
                            </a>
                        </div>

                        <div class="description ">
                            <h4>
                                <a href="product.php?id={{ product.getProdId() }}">
                                {{ product.getProdName() }}
                                </a>
                            </h4>
                        </div>

                        <div class="price">
                            <small>Starting from</small>
                            <span>${{ product.getTblProdPricing().getProdPricePrice() }}</span> 
                            <!-- <span class="old-price">oldPrice</span> -->
                        </div> 

                        <div class="action-control">
                            <a class="btn btn-primary" href="product.php?id={{ product.getProdId() }}">
                                <span class="add2cart">
                                    View more
                                </span>
                            </a>
                        </div>

                            <!--
                                <div class="promotion">
                                    <span class="new-product">NEW</span>
                                    <span class="discount">15% OFF</span>
                                </div>
                            -->
                        
                    </div>