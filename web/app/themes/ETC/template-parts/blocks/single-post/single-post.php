<?php
$date = get_field('date_articles');
$title = get_the_title();
$nextPost = get_next_post();
if(is_object($nextPost)) {
    $nextPostID = $nextPost->ID;
}else {
    $nextPostID = '';
}
$prev = get_previous_post();
if(is_object($prev)) {
    $prevId = $prev->ID;
}else {
    $prevId = '';
}
?>
<div class="wrapper media-featured-post-wrap">
    <div class="media-featured-post">
        <span class="day"><?= $date ?></span>
        <h1>
            <?= $title ?>
        </h1>
        <?php
        the_content();
        ?>
        <?php get_template_part('template-parts/blocks/single-post/plurimum') ?>
    </div>
</div>
<div class="wrapper">
    <div class="pagination-details">
        <ul class="pagination pagination-details d-flex">
            <li>
                <a <?php if($prevId): ?> href="<?=get_permalink($prevId)?>" <?php endif; ?>>
                </a>

                <span><?php _e('Previous article','ETC') ?></span>
            </li>

            <li class="button-close">
                <a href="javascript:void(0)" onclick="goBack()">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Icon_Close.svg" alt="">
                </a>
                <span> <?php _e('Close','ETC') ?></span>
            </li>

            <li>
                <span> <?php _e('Next article','ETC') ?></span>

                <a <?php if($nextPostID): ?> href="<?=get_permalink($nextPostID)?>" <?php endif; ?>>
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
