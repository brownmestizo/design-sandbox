!(function () {
    // Initialize select2
    var select = $('.js-select-country'),
        priorityPrice = $('.js-priority-price'),
        economyPrice = $('.js-economy-price'),
        priorityBlock = $('.js-fedex-priority'),
        economyBlock = $('.js-fedex-economy'),
        totalShipping = $('.js-total-shipping'),
        totalSummary = $('.js-summary'),
        cartPrice = $('.js-cart-price').data('price')
        ;

    // Initialize select2
    select.select2({
        ajax: {
            url: function (params) {
                return '/api/index.php/fedex/country/' + params.term;
            },
            delay: 250,
            dataType: 'json',
            processResults: function (data) {
                var res = [];
                data = data.TblShippingCountriess;
                // process array so it will fit select ajax requirements
                for (var i in data) {
                    res.push({id: data[i].CtyId, text: data[i].CtyName});
                }
                return {results: res};
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        minimumInputLength: 1,
        placeholder: 'Select country of destination'
    });

    // When select changes, we're trying to get shipping info for selected country
    select.change(function () {
        loadShippingOptionsFor(this.value);
    });

    // Shipping data will be stored here
    var xdata = {
            p: null, // priority shipping total cost
            e: null, // economy shipping total cost
            i: []    // per product shipping cost
        },
        radios = $('.js-ship-radio'),
        eraseShippingInformation = function () {
            // uncheck radios
            radios.each(function () {
                this.checked = false;
            });

            economyPrice.add(priorityPrice).html('-');
            economyBlock.add(priorityBlock).hide();
            xdata = {p: null, e: null, i: []};
            changeSummary();
        },
        loadShippingOptionsFor = function (countryId) {
            eraseShippingInformation();
            $.get('/api/index.php/fedex/country/options/' + countryId, function (data) {
                if (data.priority) {
                    priorityPrice.html('$' + data.priority);
                    priorityBlock.show();
                    xdata.p = data.priority;
                }
                if (data.economy) {
                    economyPrice.html('$' + data.economy);
                    economyBlock.show();
                    xdata.e = data.economy;
                }
                xdata.i = data.products;
            }, 'json')
        },
        changeSummary = function () {
            var shippingType = $('.js-ship-radio:checked').val(),
                shippingPrice = 0;
            totalShipping.html('-');
            if (shippingType == 'priority') {
                shippingPrice = xdata.p;
            } else if (shippingType == 'economy') {
                shippingPrice = xdata.e;
            }

            if (shippingPrice) {
                totalShipping.html('$' + shippingPrice);
            }

            totalSummary.html('$' + (shippingPrice + cartPrice));

            changeProductsShippingDetails(shippingType);
        },
        changeProductsShippingDetails = function (shippingType) {
            var products = xdata.i,
                shippingPrice = 0;
            $('.js-prod-shipping').html('-');
            $('.js-prod-total').each(function () {
                this.innerHTML = '$' + this.getAttribute('data-price');
            });
            for (var i in products) {
                var product = products[i];
                if (shippingType == 'priority') {
                    shippingPrice = product.p;
                } else if (shippingType == 'economy') {
                    shippingPrice = product.e;
                }
                $('.item-shipping-' + i).html('$' + shippingPrice);
                var itemTotal = $('.item-total-price-' + i);
                itemTotal.html('$' + (shippingPrice + itemTotal.data('price')));
            }
        };
        
    radios.on('stateChanged', changeSummary);
    eraseShippingInformation();
    changeSummary();
})();