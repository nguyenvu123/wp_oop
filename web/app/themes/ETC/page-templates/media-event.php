<?php
/**
 * Template Name: Media and Events
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <main id="main-content" class="main">
        <?php get_template_part('template-parts/blocks/media-events/banner') ?>
        <?php get_template_part('template-parts/blocks/media-events/lists-media') ?>
    </main>
    <!--END  Pull HTML here-->
<?php get_footer();