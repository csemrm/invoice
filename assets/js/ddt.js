(function($)
{

    // $(document).ready(function() {


    key = 1;

    $(document).on("click", 'img.add', function() {
        key = key++;
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



    // });


})(jQuery);
 