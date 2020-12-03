<?php
$title = get_field('title_sorting processes');
$des = get_field('description_sorting processes');
$image = get_field('image_sorting processes');
$alt = $image['alt'];
$thumb = $image['sizes']['SERVICE_IMAGE']

?>
<div class="row-col recycling">
    <div class="col-left">
        <h2>
            <?=$title ?>
        </h2>
        <?=$des ?>
    </div>
    <div class="col-right">
        <div class="include-image">
            <img src="<?=$thumb ?>" alt="<?=$alt ?>">
        </div>
    </div>
</div>