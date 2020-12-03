<?php
$id = get_the_ID();
$image = get_the_post_thumbnail_url($id, 'DEATAIL_POST');
?>


<div class="banner banner-media-event-open">
    <div class="banner-main">
        <div class="wrapper full-width">
            <ul class="breadcrumb">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ul>
        </div>
    </div>

    <div class="banner-bottom">
        <div class="wrapper">
            <div class="pic">
                <img src="<?=$image ?>" alt="<?= get_the_title(); ?>" class="img-right">
            </div>
        </div>
    </div>
</div>