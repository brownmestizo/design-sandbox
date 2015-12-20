(function ($) {
    $(function () {
        $('.table-expandable').each(function () {
            var table = $(this);
            //table.children('thead').children('tr').prepend('<th></th>');
            table.children('tbody').children('tr').filter(':odd').hide();
            
            /*
            table.children('tbody').children('tr').filter(':even').click(function () {
                var element = $(this);
                element.next('tr').toggle('fast');
                //element.find(".table-expandable-arrow").toggleClass("up");
            });
            */

            table.children('tbody').children('tr').filter(':even').click(function () {
                var element = $(this);
                element.next('tr').toggle('fast');
                //element.find(".table-expandable-arrow").toggleClass("up");
            });            
            /*
            table.children('tbody').children('tr').filter(':even').each(function () {
                var element = $(this);
                element.prepend('<td style="width:16px;"><div class="table-expandable-arrow"></div></td>');
            });
*/
        });
    });
})(jQuery); 