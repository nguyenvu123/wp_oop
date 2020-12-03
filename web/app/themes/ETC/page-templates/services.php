<?php
/**
 * Template Name: Services
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <main id="main-content" class="main">
        <?php get_template_part('template-parts/blocks/services/banner') ?>
        <div class="block-services">
            <div class="wrapper">
                <?php get_template_part('template-parts/blocks/services/procurement') ?>
                <?php get_template_part('template-parts/blocks/services/logistics') ?>
                <?php get_template_part('template-parts/blocks/services/consultancy-design') ?>
                <?php get_template_part('template-parts/blocks/services/training') ?>
                <?php get_template_part('template-parts/blocks/services/maintenance') ?>
            </div>
        </div>
    </main>
    <!--END  Pull HTML here-->
<?php get_footer();
