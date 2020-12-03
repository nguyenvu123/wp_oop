$(document).ready(function(){
    var time = 12;
    var $bar,
        $slick,
        isPause,
        tick,
        percentTime;

    $slick = $('.banner-home .slide-banner');

    if ($slick.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('slider__counter');

        var updateSliderCounter = function(slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $('.number-slide').text(currentSlide);
            $('.number-total').text(slidesCount);
        };

        $slick.on('init', function(event, slick) {
            updateSliderCounter(slick);
        });

        $slick.slick({
            draggable: true,
            adaptiveHeight: false,
            arrows: false,
            mobileFirst: true,
            pauseOnDotsHover: true,
        });

        $bar = $('.slider-progress .progress');

        $('.slider-wrapper').on({
            mouseenter: function() {
                isPause = true;
            },
            mouseleave: function() {
                isPause = false;
            }
        });

        startProgressbar();

    }

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
        $slick.on('afterChange', function(event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
    }

    function interval() {
        if(isPause === false) {
            percentTime += 1 / (time+0.1);
            $bar.css({
                width: percentTime+"%"
            });
            if(percentTime >= 100)
            {
                $slick.slick('slickNext');
                startProgressbar();
            }
        }
    }


    function resetProgressbar() {
        $bar.css({
            width: 0+'%'
        });
        clearTimeout(tick);
    }

});
