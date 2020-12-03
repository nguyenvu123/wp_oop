<?php
$link = get_field('link_additional_articles_home');
?>
<div class="block-featured-articles featured">
    <div class="wrapper full-width">
        <h2 class="title-medium text-center"> <?php _e('Featured articles','ETC') ?></h2>
        <div class="row-col d-flex">
            <?php
            $articles = get_field('featured_articles');
            foreach ($articles as $article):
                $id = $article->ID;
                $date = get_field('date_articles', $id);
                $imgurl = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'ARTICLES');

                ?>
                <div class="col-item">
                    <div class="item-body">
                        <div class="date"><?= $date ?></div>
                        <h3 class="title-article"><?= $article->post_title; ?></h3>
                        <a href="<?=get_permalink($id) ?>" class="link-more"> <?php _e('Read more', 'DOMAIN'); ?></a>
                    </div>
                    <img src="<?= $imgurl[0] ?>" alt="<?= $article->post_title; ?>" class="img-bottom">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="bottom-btn text-center">
            <a href="<?=$link ?>" class="btn btn-white-border"> <?php _e('Additional articles', 'ETC') ?></a>
        </div>
    </div>
</div>
