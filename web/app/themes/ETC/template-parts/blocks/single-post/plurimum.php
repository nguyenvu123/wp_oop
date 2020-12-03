<?php
$title = get_field('title_block_plurimum');
$des = get_field('description_block_plurimum');
$image = get_field('image_block_plurimum');
$alt = $image['alt'];
$thumb = $image['sizes']['PLURIMUM'];
$textLink = get_field('link_text_block_plurimum');
$url = get_field('url_block_plurimum');

?>

<div class="block-plurimum">
    <h2>
       <?=$title ?>
    </h2>

    <div class="row-col block-plurimum-content">
        <div class="col-left">
            <p class="text-medium"><?=$des ?></p>
            <ul class="list-plurimum">
                <?php
                if( have_rows('list_block_plurimum') ):
                    while ( have_rows('list_block_plurimum') ) : the_row();
                    $item = get_sub_field('item');
                ?>
                    <li><?=$item ?></li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>

            <a class="link-more" href="<?=$url ?>" target="_blank">
                <?=$textLink ?>
            </a>
        </div>

        <div class="col-right">
            <div class="include-image">
                <img src="<?=$thumb ?>" alt="<?=$alt ?>">
            </div>
        </div>
    </div>
</div>