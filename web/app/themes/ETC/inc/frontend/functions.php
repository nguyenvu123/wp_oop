<?php if (! defined('APP_PATH')) die ('Bad requested!');

//adding a body class to a specific page template
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    $classes[] = 'abc';
    return $classes;
}

//Add active class to wp_nav_menu
function special_nav_class($classes, $item)
{
    if ( in_array('current-menu-item', $classes) )
    {
        $classes[] = 'is-active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function custom_excerpt( $content, $length ) {
    $drop = explode( ' ', $content );
    $total = 0;
    foreach ( $drop as $key => $drops ) {
        $total += strlen( $drops ) + 1;
        echo $drops . ' ';
        if ( $total > $length ) {
            echo '...';
            break;
        }
    }
}

add_action('wp_ajax_load_posts_media', 'load_posts_media');
add_action('wp_ajax_nopriv_load_posts_media', 'load_posts_media');

function load_posts_media() {

    $wp_ajax = true;
    ob_start();
     include( locate_template( 'template-parts/blocks/media-events/filter.php', false, false ) );
    $content = ob_get_clean();
    echo $content;
    die();
}
add_action('wp_ajax_load_posts_career', 'load_posts_career');
add_action('wp_ajax_nopriv_load_posts_career', 'load_posts_career');

function load_posts_career() {

    $wp_ajax = true;
    ob_start();
    include( locate_template( 'template-parts/blocks/career/item.php', false, false ) );
    $content = ob_get_clean();
    echo $content;
    die();
}

