<?php
/**
 * Template Name: Home Page
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <main id="main-content" class="main">
        <?php get_template_part('template-parts/blocks/home/banner') ?>
        <?php get_template_part('template-parts/blocks/home/our-company') ?>
        <?php get_template_part('template-parts/blocks/home/etc-group') ?>
        <?php get_template_part('template-parts/blocks/home/localisation') ?>
        <?php get_template_part('template-parts/blocks/home/featured-articles') ?>
        <?php get_template_part('template-parts/blocks/home/presentations') ?>
        <?php get_template_part('template-parts/blocks/home/partner') ?>
    </main>
    <!--END  Pull HTML here-->
<?php get_footer();

