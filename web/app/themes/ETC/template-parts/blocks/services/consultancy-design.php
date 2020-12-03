<?php
$title = get_field('title_consultancy');
$TexTop = get_field('text_on_top_consultancy');
$textBottom = get_field('text_on_bottom_consultancy');
$image = get_field('image_consultancy');
$alt = $image['alt'];
$thumb = $image['sizes']['SERVICE_IMAGE'];
$ourOffterText = get_field('our_offer_text_consultancy');

?>
<div class="row-col our-offer">
    <div class="col-left">
        <h2><?=$title ?></h2>
        <?=$TexTop ?>
    </div>
    <div class="col-right">
        <div class="include-image">
            <img src="<?=$thumb ?>" alt="<?=$alt ?>">
        </div>
    </div>

</div>
<div class="block-our-offer">
    <p class="text-medium semi-bold"><?=$ourOffterText ?></p>
    <div class="include-items">
        <?php
        if (have_rows('our_offer_consultancy')):
            while (have_rows('our_offer_consultancy')) : the_row();
                $item = get_sub_field('item');
                ?>
                <div class="item">
                    <p><?=$item ?></p>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>