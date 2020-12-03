<?php
$title = get_field('title_banner_services');
$textTop = get_field('text_on_top_banner_services');
$textBottom = get_field('text_on_bottom_banner_services');
$image = get_field('image_banner_services');
$alt = $image['alt'];
$thumb = $image['sizes']['BANNER_SERVICES'];
?>

<div class="banner banner-media-event">
    <div class="banner-main">
        <div class="wrapper full-width">
            <ul class="breadcrumb">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ul>

            <h1 class="title"><?= $title ?></h1>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="wrapper">
            <div class="row-col d-flex">
                <div class="col-left">
                    <p class="text-medium"><?= $textTop ?></p>
                    <p><?= $textBottom ?></p>
                </div>
                <div class="col-right">
                    <img src="<?= $thumb ?>" alt="<?= $alt ?>" class="img-right">
                </div>
            </div>
        </div>
    </div>
</div>