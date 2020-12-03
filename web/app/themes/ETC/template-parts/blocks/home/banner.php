<div class="banner-home">
    <div class="slider-wrapper">
        <div class="slide-banner">
            <?php
            if (have_rows('banner_home')):
                while (have_rows('banner_home')) : the_row();
                    $image = get_sub_field('image');
                    $imageAlt = $image['alt'];
                    $thumb = $image['sizes']['IMAGE_BANNER_HOME'];
                    $title = get_sub_field('title');
                    $des = get_sub_field('description');
                    $text1 = get_sub_field('text_1');
                    $text2 = get_sub_field('text_2');
                    $text3 = get_sub_field('text_3');
                    $text4 = get_sub_field('text_4');
                    $text5 = get_sub_field('text_5');
                    ?>
                    <div class="item-slide" style="background-image: url('<?= $thumb ?>')">
                        <div class="wrapper full-width">
                            <div class="slide-content">
                                <div class="content-center">
                                    <h1 class="title"><?=$title ?></h1>
                                    <p><?=$des ?></p>
                                </div>
                                <div class="animate-text">
                                    <div class="item item-1"><?=$text1 ?></div>
                                    <div class="item item-2"><?=$text2 ?></div>
                                    <div class="item item-3"><?=$text3 ?></div>
                                    <div class="item item-4"><?=$text4 ?></div>
                                    <div class="item item-5"><?=$text5 ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="bottom-slide">
            <div class="number-slide"></div>
            <div class="slider-progress">
                <div class="progress"></div>
            </div>
            <div class="number-total"></div>
        </div>
    </div>
</div>
