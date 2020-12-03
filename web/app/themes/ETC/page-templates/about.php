<?php
/**
 * Template Name: About
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <main id="main-content" class="main">
        <?php get_template_part('template-parts/blocks/about/banner') ?>
        <?php get_template_part('template-parts/blocks/about/block1') ?>
        <?php get_template_part('template-parts/blocks/about/block2') ?>
        <?php get_template_part('template-parts/blocks/about/block3') ?>
        <?php get_template_part('template-parts/blocks/about/history') ?>
        <?php get_template_part('template-parts/blocks/about/ETC-is') ?>

    </main>
    <!--END  Pull HTML here-->
<?php get_footer();