<?php
$title = get_field('title_page_contact');
$map = get_field('image_map_left_page_contact');
$image = get_field('image_right_page_contact');
$thumb = $image['sizes']['ABOUT_HISTORY'];

?>
<div class="banner banner-contact">
    <div class="banner-main">
        <div class="wrapper full-width">
            <ul class="breadcrumb">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </ul>
            <div class="content col-6">
                <h1 class="title"><?= $title ?></h1>
                <div class="form-group">
                    <label><?php _e('Choose a country', 'ETC') ?> :</label>
                    <select class="select2 selectContact">
                        <?php
                        if (have_rows('country_page_contact')):
                            while (have_rows('country_page_contact')) : the_row();
                                $name = get_sub_field('name');
                                ?>
                                <option value="<?=$name ?>"> <?= $name ?></option>
                            <?php

                            endwhile;
                        endif;

                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="feature bg" style="background-image: url('<?= $thumb ?>')"></div>
    </div>
    <?php get_template_part('template-parts/blocks/contact/content') ?>
</div>
