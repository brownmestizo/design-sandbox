    <!-- Main component call to action -->
    <div class="row featuredPostContainer globalPadding style2">
        <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>

        <div id="productslider" class="owl-carousel owl-theme">
                
                {% for product in newProducts %}
                <div class="item">
                    {% include 'partials/product.php' %}
                </div>
                {% endfor %}

        </div>
        <!--/.productslider-->
    </div>
    <!--/.featuredPostContainer-->