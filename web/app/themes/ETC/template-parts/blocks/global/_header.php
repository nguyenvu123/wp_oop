<?php
$linkContact = get_field('link_contact', 'option');
$logo = get_field('logo','option');
$textTop = get_field('text_on_top_header','option');
$textBetterFuture = get_field('text_better_future','option');
$betterFutureLink = get_field('better_future_link','option');
?>

<div class="wrapper full-width">
    <div class="top-header">
        <div class="text"><?=$textTop ?> <a href="<?=$betterFutureLink ?>"><?=$textBetterFuture ?></a></div>
        <div class="cta">
            <a href="<?=$linkContact ?>" class="link-cta"><?php _e('Contact', 'ETC') ?></a>
        </div>
    </div>
    <div class="main-header">
        <a href="/" class="logo"><img src="<?=$logo ?>" alt="logo"></a>
        <?php get_template_part('template-parts/components/header-menu') ?>
    </div>
</div>