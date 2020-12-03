<?php
$title = get_field('title_banner_about');
$description = get_field('description_banner_about');
$image = get_field('image_banner_about');
$alt = $image['alt'];
$thumb = $image['sizes']['BANNER_ABOUT']
?>
<div class="banner banner-two-column">
    <div class="banner-main">
        <div class="wrapper full-width">
            <ul class="breadcrumb">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </ul>
            <div class="content col-5">
                <h1 class="title"><?=$title ?></h1>
                <p><?=$description ?></p>
            </div>
        </div>
        <div class="feature bg" style="background-image: url('<?=$thumb ?>')"></div>
    </div>
</div>
