<?php if ( ! defined('APP_PATH')) die ('Bad requested!');

/**
 * Enqueue scripts and styles.
 **/
function setup_scripts() {
    // Styles
    wp_enqueue_style('main-style', ASSETS_PATH.'css/main.css', array(), null);

    // Scripts
    wp_enqueue_script('main-script', ASSETS_PATH.'js/main.js', array('jquery'), null, true);

    /* array with elements to localize in scripts */
    $script_localization = array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'home_url' => get_home_url()
    );
    wp_localize_script('main-script', 'script_loc', $script_localization);
}
add_action( 'wp_enqueue_scripts', 'setup_scripts' );

/**
 * Default setup.
 **/
function default_setup(){
    register_nav_menus( array(
        'default_main_menu'     => __('Main Menu', DOMAIN)
    ) );
    register_nav_menus( array(
        'default_header_menu'   => __('Header Menu', DOMAIN)
    ) );

    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'default_setup');

define('ALLOW_UNFILTERED_UPLOADS', true);
function icl_post_languages(){
    $languages = apply_filters( 'wpml_active_languages', NULL, array( 'skip_missing' => 0, 'link_empty_to' => get_home_url() ) );

    if ( 0 < count($languages) ) {
        $lang_arr = array();
        $html = '';
        foreach($languages as $l){
            
            if ( $l['active'] ) {
                $html .= '<li class="active ' . $l['language_code'] .'">';
                $html .= '<a href="'.$l['url'].'" style="text-transform: uppercase;">'.$l['language_code'].'</a>';
                $html .= '</li>';
            }else {
                $html .= '<li class="'. $l['language_code'] .'">';
                $html .= '<a href="'.$l['url'].'" style="text-transform: uppercase;">'.$l['language_code'].'</a>';
                $html .= '</li>';
            }
        }

        echo  $html;
    }
}

function my_custom_mime_types( $mimes ) {

// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
    unset( $mimes['exe'] );

    return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


//add size image

add_image_size("IMAGE_BANNER_HOME",1730, 480, true);
add_image_size("IMAGE_OUR_COMPANY1",490, 185, true);
add_image_size("IMAGE_OUR_COMPANY2",247, 162, true);
add_image_size("IMAGE_OUR_COMPANY4",235, 310, true);
add_image_size("GROUP_ETC_HOME",150, 200, true);
add_image_size("LOCALISATION_HOME",1250, 360, true);
add_image_size("ARTICLES",395, 240, true);
add_image_size("PRESENTATION",155, 200, true);
add_image_size("BANNER_SERVICES",500, 660, true);
add_image_size("SERVICE_IMAGE",500, 335, true);
add_image_size("BANNER_ABOUT",810, 480, true);
add_image_size("DEATAIL_POST",1040, 620, true);
add_image_size("PLURIMUM",400, 550, true);
add_image_size("ABOUT_HISTORY",850, 440, true);
add_image_size("ABOUT_MAP",825, 560, true);







