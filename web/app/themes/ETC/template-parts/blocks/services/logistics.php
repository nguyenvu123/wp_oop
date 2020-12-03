<?php
$title = get_field('title_logistics_services');
$textTop = get_field('text_on_top_logistics_services');
$logisticsText = get_field('logistics_text_logistics_services');
$image = get_field('image_logistics_services');
$alt = $image['alt'];
$thumb = $image['sizes']['SERVICE_IMAGE']
?>
<div class="row-col reverse">
    <div class="col-left">
        <h2><?=$title ?></h2>
        <?=$textTop ?>
    </div>
    <div class="col-right">
        <div class="include-image">
            <img src="<?=$thumb ?>" alt="<?=$alt ?>">
        </div>
    </div>
</div>

