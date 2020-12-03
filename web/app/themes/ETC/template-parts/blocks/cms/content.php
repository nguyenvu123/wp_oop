<div class="block-services-cms">
    <div class="wrapper">
        <div class="row-col d-flex">
            <div class="col-left">
                <ul class="list-group">
                    <?php
                    if (have_rows('lists_content_page_cms')):
                        $i =0;
                        while (have_rows('lists_content_page_cms')) : the_row();
                            $i++;
                            $titleLeft = get_sub_field('title_left');
                            ?>
                            <li class="<?php if($i ==1){echo 'active';} ?>"><?= $titleLeft ?> <img
                                        src="<?= get_template_directory_uri() ?>/assets/images/Arrow_3.svg" alt=""></li>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="col-right content-text">
                <?php
                if (have_rows('lists_content_page_cms')):
                    $i =0;
                    while (have_rows('lists_content_page_cms')) : the_row();
                    $i++;
                        $desRight = get_sub_field('description_right');
                        ?>
                        <div class="des-item <?php if($i ==1){echo 'show';} ?>">
                            <?= $desRight ?>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
