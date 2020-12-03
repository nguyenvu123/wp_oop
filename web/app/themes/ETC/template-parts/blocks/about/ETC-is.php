<?php
$title = get_field('title_block_etc_is');
$image = get_field('image_right_block_etc_is');
$alt = $image['alt'];
$thumb = $image['sizes']['PLURIMUM'];

?>
<div class="block-key-figures">
    <div class="wrapper">
        <div class="box-content">
            <h2 class="title"><?=$title ?></h2>
            <div class="row-col d-flex">
                <div class="col-left">
                    <div class="row-item d-flex">
                        <?php
                        if( have_rows('lists_block_etc_is') ):
                            while ( have_rows('lists_block_etc_is') ) : the_row();
                                $number = get_sub_field('title_number_block_etc_is');
                                $des = get_sub_field('description_block_etc_is');
                                ?>
                                <div class="item">
                                    <h3><?=$number ?></h3>
                                    <p><?=$des ?></p>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>

                    </div>
                </div>
                <div class="col-right">
                    <img src="<?=$thumb ?>" alt="<?=$alt ?>" class="image-right">
                </div>
            </div>
        </div>
    </div>
</div>

