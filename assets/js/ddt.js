(function($)
{

    $(document).ready(function() {

        is_clcik = false;
        key = 1;

        $(document).on("click", 'img.add', function() {

            if (is_clcik === false) {

                key = parseInt(($(this).closest('tr').attr('id')));
                is_clcik = true;
            }

            $.ajax({
                type: "POST",
                url: "/index.php/invoice/add_more/" + key++,
//                    dataType: 'json',
                success: function(msg) {
                    $('#item_table').append(msg);

                }
            });
        });
        $(document).on("click", 'img.add_delete', function() {
            tr_id = ($(this).closest("tr").attr("id"));

            if (tr_id != 0) {
                $('#' + tr_id).remove();
            }
        });

        fattura_key = 1;

        $(document).on("click", 'img.fattura_add', function() {

            if (is_clcik === false) {

                fattura_key = parseInt(($(this).closest('tr').attr('id')));
                is_clcik = true;
            }
            //fattura_key = fattura_key + 1;

            $.ajax({
                type: "POST",
                url: "/index.php/fattura_invoice/add_more/" + fattura_key++,
//                    dataType: 'json',
                success: function(msg) {
                    $('#item_table').append(msg);

                }
            });
        });
        $(document).on("click", 'img.fattura_add_delete', function() {
            tr_id = ($(this).closest("tr").attr("id"));

            if (tr_id != 0) {
                $('#' + tr_id).remove();
            }
        });


        ddt_key = 1;

        $(document).on("click", 'img.ddt_add', function() {
            key = key++;
            $.ajax({
                type: "POST",
                url: "/index.php/ddt/add_more/" + fattura_key++,
//                    dataType: 'json',
                success: function(msg) {
                    $('#item_table').append(msg);

                }
            });
        });
        $(document).on("click", 'img.ddt_add_delete', function() {
            tr_id = ($(this).closest("tr").attr("id"));

            if (tr_id != 0) {
                $('#' + tr_id).remove();
            }
        });


    });


})(jQuery);
 