<?php
$title = get_field('title_block_2_group_offers');
$des = get_field('description_block_2_group_offers');
$image = get_field('image_block_2_group_offers');
$alt = $image['alt'];
$thumb = $image['sizes']['BANNER_SERVICES'];
?>
<div class="block-plurimum">
    <div class="wrapper">
        <div class="row-col align-center">
            <div class="col-left col-6">
                <h2 class="title">
                    <?= $title ?>
                </h2>
                <p class="text-medium"><?= $des ?></p>
                <ul class="list-plurimum">
                    <?php
                    if (have_rows('list_block_2_group_offers')):
                        while (have_rows('list_block_2_group_offers')) : the_row(); ?>
                            <li><?= get_sub_field('item'); ?></li>
                        <?php

                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="col-right col-6">
                <div class="include-image">
                    <img src="<?= $thumb ?>" alt="<?= $alt ?>">
                </div>
            </div>
        </div>
    </div>
</div>