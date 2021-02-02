<?php
//Show menu options
register_nav_menus(array('menu-principal'=>'Menu principal'));
//Show thumbnail
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
//Only extract from post

// Réduire l'extrait
function new_excerpt_length($length) {
    global $post;
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changer le lien read more
function new_excerpt_more($more) {
    global $post;
    return '… <div><a href="'. get_permalink($post->ID) . '"><div class="readMore centrer">' . 'La suite' . '</div></a><div></div></div>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

//Logo custom
add_theme_support( 'custom-logo' );
?>