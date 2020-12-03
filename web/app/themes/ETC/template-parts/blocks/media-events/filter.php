<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$paged = isset($_POST["paged"]) ? $_POST["paged"] : $paged;
$postType = 'post';
$postType = isset($_POST["postType"]) ? $_POST["postType"] : $postType;

$args = array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DES',
    'paged' => $paged,
);

$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        $id = get_the_ID();
        $date = get_field('date_articles', $id);
        $customLinkPdf = get_field('file_pdf',$id);
        $imgurl = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'ARTICLES');
        if ($postType == 'post') {
            ?>
            <div class="col-item">
                <div class="item-body">
                    <div class="date"><?= $date ?> </div>
                    <h3 class="title-article"><?= get_the_title() ?></h3>
                    <a href="<?= get_permalink($id) ?>" class="link-more">Read more</a>
                </div>
                <img src="<?= $imgurl[0] ?>" alt="<?= get_the_title(); ?>" class="img-bottom">
            </div>

            <?php
        } else { ?>
            <div class="col-item col-item-white">
                <img src="<?= $imgurl[0] ?>" alt="<?= get_the_title(); ?>" class="img-left">
                <div class="item-body">
                    <div class="date"><?= $date ?></div>
                    <h3 class="title-article"><?php custom_excerpt(get_the_title(), 42); ?></h3>

                    <a href="<?= $customLinkPdf ?>" class="link-more" target="_blank"><?php _e('Read more', 'DOMAIN'); ?></a>
                </div>
            </div>

            <?php
        }

    endwhile;
    wp_reset_postdata();
    wp_reset_query();
endif;

?>
<div class="navigation ajax" data-paged="<?= $paged ?>"><?php wp_pagenavi(array('query' => $query)); ?></div>
