<?php
/**
 * Template Name: Partners
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <main id="main-content" class="main">
        <?php get_template_part('template-parts/blocks/partners/banner') ?>
        <?php get_template_part('template-parts/blocks/partners/oem') ?>
        <?php get_template_part('template-parts/blocks/partners/relationship1') ?>
        <?php get_template_part('template-parts/blocks/partners/info') ?>
        <?php get_template_part('template-parts/blocks/partners/relationship2') ?>
    </main>
    <!--END  Pull HTML here-->
<?php get_footer();