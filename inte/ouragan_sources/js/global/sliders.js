(function ($) {
    'use strict';

    function slidePartner() {
        $('.block-slide-partner .list-partner').slick({
            infinite: true,
            slidesToShow: 6,
            autoplay: true,
            speed: 4000,
            autoplaySpeed: 0,
            cssEase: 'linear',
            arrows: false,
        });
    }

    function slideHistory() {
        $('.block-history-slide .list-slide').slick({
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            slide: '.item',
            arrows: true,
            prevArrow: '.slider-nav .slick-prev',
            nextArrow: '.slider-nav .slick-next',
            appendArrows: '.slider-nav',
        });
    }

    $(document).ready(function () {
        slidePartner();
        slideHistory();
    });

    $(window).on('load resizeend', function () {
        //
    });

})(jQuery);
