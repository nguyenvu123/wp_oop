<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?= get_bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1.0,width=device-width,height=device-height,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google" content="notranslate">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-demo.jpg" />
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?= get_bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
    <?php get_template_part('template-parts/blocks/global/_header') ?>
</header>