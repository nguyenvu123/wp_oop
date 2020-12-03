<div class="block-slide-partner">
    <div class="list-partner">
        <?php
        if (have_rows('partner', 'option')):
            while (have_rows('partner', 'option')) : the_row();
                $logo = get_sub_field('logo');
                $link = get_sub_field('link');
                ?>
                <div class="item-logo">
                    <a href="<?= $link ?>"><img src="<?= $logo ?>" alt=""></a>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
