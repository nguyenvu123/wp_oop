<?php
$title = get_field('title_banner_career');
$des = get_field('description_banner_career');
$image = get_field('image_banner_career');
$alt = $image['alt'];
$thumb = $image['sizes']['BANNER_ABOUT']
?>

<div class="banner banner-two-column">
    <div class="banner-main">
        <div class="wrapper full-width">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Career</li>
            </ul>
            <div class="content col-5">
                <h1 class="title"><?=$title ?></h1>
                <p><?=$des ?></p>
            </div>
        </div>
        <div class="feature bg" style="background-image: url('<?=$thumb ?>')"></div>
    </div>
</div>

