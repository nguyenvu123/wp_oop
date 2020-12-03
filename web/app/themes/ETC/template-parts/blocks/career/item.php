<?php
$taxonomy = '';
if(isset($_POST["taxonomy"])){
    if($_POST["taxonomy"] =='All') {
        $taxonomy = '';
    }else {
        $taxonomy = isset($_POST["taxonomy"]) ? $_POST["taxonomy"] : $taxonomy;
    }
}
$args = array(
    'post_type' => 'career_custom',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DES',
);
if($taxonomy !='') {
    $args['tax_query'] = array(
        array (
            'taxonomy' => 'category_career',
            'field' => 'slug',
            'terms' => $taxonomy
        )
    );
}
$getCareer = new WP_Query($args);
if ($getCareer->have_posts()) :
    $i = 0;
    while ($getCareer->have_posts()): $getCareer->the_post();
        $i++;
        $id = get_the_ID();
        $logo = get_field('logo_career_post',$id);
        $ville = get_field('ville_text_career_post',$id);
        $villeDes = get_field('ville_description_career_post',$id);
        $contact = get_field('contact_text_career_post',$id);
        $contactDes = get_field('contact_description_career_post');
        $apply = get_field('apply_text_career_post', $id);
        $textTop = get_field('text_top_career_post',$id);
        $textBt = get_field('text_bottom_career_post',$id);
        $info = get_field('info_right_career_post',$id);
        $email = get_field('apply_email_career_post',$id);

        ?>
        <div class="row-collapse">
            <div class="item-collapse">
                <h3><img src="<?=$logo ?>" alt=""><?= get_the_title(); ?></h3>
                <div class="open-collapse"><a href="javascript: void(0);" class="link-more"> <?php _e('See more'); ?></a><i
                        class="icon-up-open-big"></i></div>
            </div>
            <div class="des-collapse">
                <div class="row-col d-flex">
                    <div class="col-left">
                        <div class="item">
                            <h4><?=$ville ?></h4>
                            <p><?=$villeDes ?></p>
                        </div>
                        <div class="item">
                            <h4><?=$contact ?></h4>
                            <p><?=$contactDes ?></p>
                        </div>
                        <a href="mailto:<?=$email ?>" class="link-more"><?=$apply ?></a>
                    </div>
                    <div class="col-right content-text">
                        <p class="text-medium"><?=$textTop ?></p>
                        <p class="text-medium"><?=$textBt ?></p>
                            <?=$info?>
                        <a href="mailto:<?=$email ?>" class="link-more"><?=$apply ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
endif;
?>