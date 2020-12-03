(function ($) {
    'use strict';

    function readMore() {
        $(".read-more").click(function() {
            $(".accordian").removeClass('active');
            $(this).closest(".accordian").addClass('active');
        });

        $(".read-less").click(function() {
            $(this).closest(".accordian").removeClass('active');
        });
    }



    $(document).ready(function () {
        readMore();
    });


})(jQuery);

