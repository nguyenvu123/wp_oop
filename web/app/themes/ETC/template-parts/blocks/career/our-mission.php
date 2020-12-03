<?php
$title = get_field('title_our_mission_career');
$desLeft = get_field('description_left_our_mission_career');
$desRight = get_field('description_right_our_mission_career');
?>

<div class="block-content-two-column carrer-column">
    <div class="wrapper">
        <h2 class="title"><?=$title ?></h2>
        <div class="row d-flex">
            <div class="col">
                <p><?=$desLeft?></p>
            </div>
            <div class="col">
                <p><?=$desRight ?> </p>
            </div>
        </div>
    </div>
</div>
