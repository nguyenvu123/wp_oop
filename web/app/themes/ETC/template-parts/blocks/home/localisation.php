<?php
$title = get_field('title_localisation_home');
$des = get_field('description_localisation_home');
$image = get_field('image_localisation_home');
$thumb = $image['sizes']['LOCALISATION_HOME']
?>
<div class="block-localisation">
    <div class="wrapper full-width">
        <div class="box-location bg" style="background-image: url('<?= $thumb ?>')">
            <div class="content-location">
                <div class="left">
                    <a href="#" class="btn btn-white"> <?php _e('America', 'ETC') ?></a>
                </div>
                <div class="center-text">
                    <h2 class="title"><?=$title ?></h2>
                    <p><?=$des ?></p>
                </div>
                <div class="right">
                    <a href="#" class="btn btn-white"> <?php _e('Europe', 'ETC') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>