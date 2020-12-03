<?php
$title = get_field('title_procurement_services');
$textTop = get_field('text_on_top_procurement_services');
$outsourcingText = get_field('outsourcing_text_procurement_services');
$image = get_field('image_procurement_services');
$alt = $image['alt'];
$thumb = $image['sizes']['SERVICE_IMAGE']
?>
<div class="row-col">
    <div class="col-left">
        <h2><?= $title ?></h2>
        <?= $textTop ?>
    </div>
    <div class="col-right">
        <div class="include-image">
            <img src="<?= $thumb ?>" alt="<?= $alt ?>">
        </div>
    </div>
</div>
