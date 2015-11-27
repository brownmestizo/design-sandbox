    <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
        <h3 class="section-title style2 text-center"><span>FEATURED PRODUCTS</span></h3>

        <div class="container">   
            <div class="row xsResponse">

                {% for product in featuredProducts %}
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    {% include 'partials/product.php' %}
                </div>
                {% endfor %}            

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