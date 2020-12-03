<div class="block-why-etc-group">
    <div class="wrapper full-width">
        <h2 class="title-medium text-center"><?=get_field('title_group_etc_home')?></h2>

        <?php
        if (have_rows('why_etc_group_home')):
            $i = 0;
            while (have_rows('why_etc_group_home')) : the_row();
                $i++;
                $image = get_sub_field('image');
                $alt = $image['alt'];
                $thumb = $image['sizes']['GROUP_ETC_HOME'];
                $icon = get_sub_field('icon');
                $des = get_sub_field('description');
                ?>
                <?php if ($i == 1 || $i == 4) : ?>
                    <div class="row-col d-flex">
                <?php endif; ?>
                <div class="col-item">
                    <div class="image-left">
                        <img src="<?=$thumb ?>" alt="<?=$alt ?>">
                    </div>
                    <div class="content">
                        <img src="<?=$icon ?>" alt="icon" class="icon">
                        <p><?=$des ?></p>
                    </div>
                </div>
                <?php if ($i == 3 || $i == 6): ?>
                    </div>
                <?php endif; ?>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
