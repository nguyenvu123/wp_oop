<?php
$title = get_field('title_block_history');
$bg = get_field('background_block_history');
$image = $bg['sizes']['ABOUT_HISTORY'];
?>
<div class="block-history-slide">
    <div class="top-content">
        <div class="feature" style="background-image: url('<?=$image?>')"></div>
        <div class="wrapper">
            <div class="content">
                <h2><?=$title ?></h2>
            </div>
        </div>
    </div>
    <div class="slide-bottom">
        <div class="wrapper">
            <div class="list-slide">
                <?php
                if( have_rows('list_slider_block_history') ):
                    while ( have_rows('list_slider_block_history') ) : the_row();
                $number = get_sub_field('number');
                $des = get_sub_field('description_block_history');
                ?>
                    <div class="item">
                            <h3 class="h2 year"><?=$number ?></h3>
                            <p><?=$des ?></p>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
                <div class="slider-nav">
                    <span class="slick-prev"><img src="<?= get_template_directory_uri() ?>/assets/images/Arrow_2.svg" alt=""></span>
                    <span class="slick-next"><img src="<?= get_template_directory_uri() ?>/assets/images/Arrow_2.svg" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</div>
