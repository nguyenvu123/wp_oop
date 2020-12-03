<?php
$title = get_field('title_presentations_home');
$link = get_field('link_presentations_home');
?>
<div class="block-white-papers featured">
    <div class="wrapper full-width">
        <h2 class="title-medium text-center"><?=$title ?></h2>
        <div class="row-col d-flex">
            <?php
            $presentations = get_field('white_papers_presentations_home');
            foreach ($presentations as $presentation):
            $id = $presentation->ID;
            $date = get_field('date_articles', $id);
            $imgurl = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'PRESENTATION');
            $customLinkPdf = get_field('file_pdf',$id);

            ?>
            <div class="col-item col-item-white">
                <img src="<?=$imgurl[0] ?>" alt="<?=$presentation->post_title; ?>" class="img-left">
                <div class="item-body">
                    <div class="date"><?=$date ?></div>
                    <h3 class="title-article"><?php custom_excerpt($presentation->post_title, 42); ?></h3>

                    <a href="<?=$customLinkPdf ?>" class="link-more" target="_blank"><?php _e('Read more', 'DOMAIN'); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="bottom-btn text-center">
            <a href="<?=$link ?>" class="btn btn-white-border"><?php _e('Additional content ', 'ETC') ?></a>
        </div>
    </div>
</div>