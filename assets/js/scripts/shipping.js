!(function () {
    // Initialize select2
    var select = $('.js-select-country'),
        pprice = $('.js-priority-price'),
        eprice = $('.js-economy-price'),
        pblock = $('.js-fedex-priority'),
        eblock = $('.js-fedex-economy'),
        tship = $('.js-total-shipping'),
        tsum = $('.js-summary'),
        cprice = $('.js-cart-price').data('price')
        ;
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
    select.change(function () {
        loadShippingOptionsFor(this.value);
    });
    var xdata = {p: null, e: null},
        radios = $('.js-ship-radio'),
        uncheckOptions = function () {
            radios.each(function () {
                this.checked = false;
            });
            eprice.add(pprice).html('-');
            eblock.add(pblock).hide();
            xdata = {p: null, e: null};
            changeSummary();
        },
        loadShippingOptionsFor = function (countryId) {
            uncheckOptions();
            $.get('/api/index.php/fedex/country/options/' + countryId, function (data) {
                if (data.priority) {
                    pprice.html('$' + data.priority);
                    pblock.show();
                    xdata.p = data.priority;
                }
                if (data.economy) {
                    eprice.html('$' + data.economy);
                    eblock.show();
                    xdata.e = data.economy;
                }
            }, 'json')
        },
        changeSummary = function () {
            var val = $('.js-ship-radio:checked').val();
            shippingPrice = 0;
            tship.html('-');
            if (val == 'priority') {
                shippingPrice = xdata.p;
            } else if (val == 'economy') {
                shippingPrice = xdata.e;
            }

            if (shippingPrice) {
                tship.html('$' + shippingPrice);
            }

            tsum.html('$' + (shippingPrice + cprice));
        };
    radios.on('stateChanged', changeSummary);
    uncheckOptions();
    changeSummary();
})();