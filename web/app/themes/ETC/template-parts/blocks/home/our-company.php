<?php
$title = get_field('title_our_company');
$descriptionTop =  get_field('description_top_our_company');
$descriptionBottom =  get_field('description_our_company');
$imageTop = get_field('image_top_our_company');
$imageTopAlt = $imageTop['alt'];
$thumbTop = $imageTop['sizes']['IMAGE_OUR_COMPANY1'];
$imageRight = get_field('image_right_our_company');
$imageRightAlt = $imageRight['alt'];
$thumbRight = $imageRight['sizes']['IMAGE_OUR_COMPANY4'];
$textAboutETC = get_field('text_about_etc_our_company');
$linkAboutETC = get_field('link_about_etc_our_company');

?>


<div class="block-our-company">
    <div class="wrapper">
        <div class="row-col">
            <div class="col-left">
                <h2><?=$title ?></h2>
                <p class="text-medium"><?=$descriptionTop ?></p>
                <p><?=$descriptionBottom ?> </p>
                <a href="<?=$linkAboutETC ?>" class="btn btn-white-border"><?=$textAboutETC ?></a>
            </div>
            <div class="col-right">
                <div class="grid-image">
                    <div class="row-item">
                        <div class="item"><img src="<?=$thumbTop ?>" alt="<?=$imageTopAlt ?>"></div>
                    </div>
                    <div class="row-item">
                        <div class="item-group">
                            <?php
                            if (have_rows('2_image_left_our_company')):
                            while (have_rows('2_image_left_our_company')) : the_row();
                                $image = get_sub_field('image');
                                $imageAlt = $image['alt'];
                                $thumb = $image['sizes']['IMAGE_OUR_COMPANY2'];
                            ?>
                            <div class="item"><img src="<?=$thumb ?>" alt="<?=$imageAlt ?>"></div>
                            <?php

                             endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="item"><img src="<?=$thumbRight ?>" alt="<?=$imageRightAlt ?>"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/blocks/home/figures') ?>
    </div>
</div>
