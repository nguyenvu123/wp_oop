<?php
$title = get_field('title_training_services');
$des = get_field('description_training_services');
$image = get_field('image_training_services');
$alt = $image['alt'];
$thumb = $image['sizes']['SERVICE_IMAGE'];
$telecommunicationText = get_field('telecommunication_training_title_services');
$trainingCapabilities = get_field('training_capabilities_training_title_services');
?>
<div class="row-col reverse our-offer">
    <div class="col-left">
        <h2><?= $title ?></h2>
        <?= $des ?>
    </div>
    <div class="col-right">
        <div class="include-image">
            <img src="<?= $thumb ?>" alt="<?= $alt ?>">
        </div>
    </div>
</div>
<div class="row-col training-list">
    <div class="col-left">
        <p class="text-medium semi-bold"><?= $telecommunicationText ?></p>
        <ul>
            <?php
            if (have_rows('telecommunication_training_services')):
                while (have_rows('telecommunication_training_services')) : the_row();
                    $item = get_sub_field('item');
                    ?>
                    <div class="item">
                        <li><?= $item ?></li>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
    <div class="col-right">
        <p class="text-medium semi-bold"><?= $trainingCapabilities ?></p>
        <ul>
            <?php
            if (have_rows('training_capabilities_training_services')):
                while (have_rows('training_capabilities_training_services')) : the_row();
                    $item = get_sub_field('item');
                    ?>
                    <div class="item">
                        <li><?= $item ?></li>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</div>