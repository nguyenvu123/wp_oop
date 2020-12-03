<?php
$title = get_field('title_block_1_about');
$desLeft = get_field('description_left_block_1_about');
$desRight = get_field('description_right_block_1_about');
?>

<div class="block-content-two-column">
    <div class="wrapper">
        <h2 class="title"><?=$title ?></h2>
        <div class="row d-flex">
            <div class="col">
                <p><?=$desLeft ?></p>
            </div>
            <div class="col">
                <p><?=$desRight ?></p>
            </div>
        </div>
    </div>
</div>