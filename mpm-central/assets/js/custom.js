$(document).ready(function() {

    /* Masking */
    $('.mask_money').inputmask("currency");
    $('.mask_quantity').inputmask("number");
    $('.mask_email').inputmask("email");

    

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-steelblue',
        radioClass: 'iradio_square-steelblue',
    });            


    $('#invoice3256 > tbody > tr').hover(function() {
        $(this).addClass('hover');
    }, function() {
        $(this).removeClass('hover');
    });


});

