(function ($) {
    'use strict';

    function technicoCollapse() {
        $('.list-collapse').delegate(".open-collapse", "click", function (e) {
            e.preventDefault();

            if (!$(this).closest('.row-collapse').hasClass('active')) {
                $('.row-collapse').removeClass('active');
                $('.row-collapse .des-collapse').hide();

                $(this).closest('.row-collapse').addClass('active');
                $(this).closest('.row-collapse').find('.des-collapse').show();
            }
            else {
                $('.row-collapse').removeClass('active');
                $('.row-collapse .des-collapse').hide();
            }
            $('html, body').animate({
                scrollTop: $(this).closest('.row-collapse').offset().top
            }, 700);
        });
    }

    function counterNumber() {
        var counterUp = window.counterUp['default']; // import counterUp from
                                                     // "counterup2"

        var $counters = $('.number-item .counter');

        /* Start counting, do this on DOM ready or with Waypoints. */
        $counters.each(function (ignore, counter) {
            var waypoint = new Waypoint({
                element: $(this),
                handler: function () {
                    counterUp(counter, {
                        duration: 1000,
                        delay: 15
                    });
                    this.destroy();
                },
                offset: 'bottom-in-view',
            });
        });
    }

    function select2() {
        $('.select2').select2({
            minimumResultsForSearch: -1,
        });
    }

    function selectContact() {
        $('.selectContact').on('change', function (e) {
            var $item = $('.banner-contact .country-des');
            var $index = $(".selectContact option:selected").index();

            $item.removeClass('show').eq($index).addClass('show');
        });
    }

    function openCmsTab() {
        $('.block-services-cms .list-group li').click(function () {
            var $index = $(this).index();
            $('.block-services-cms .des-item').removeClass('show');
            $('.block-services-cms .list-group li').removeClass('active');

            $(this).addClass('active');
            $('.block-services-cms .des-item').eq($index).addClass('show');
        });
    }

    $(document).ready(function () {
        counterNumber();
        select2();
        selectContact();
        technicoCollapse();
        openCmsTab();
    });

    $(window).on(
        {
            'load': function () {
                //
            },
            'resizeend': function () {
                //
            }
        }
    );

    $(window).on('load resizeend', function () {
        //
    });

})(jQuery);
