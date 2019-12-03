<?php

// Add theme features here (e.g add_theme_support() function etc)

function rz_setup_theme() {

add_theme_support( 'custom-logo', array(
    'height'    => 36,
    'width'     => 300,
    'flex-height'   => true,
    'flex-width'   => true
) );

remove_filter( 'the_content', 'wpautop' );


//Add classes to next and previous archive <a> tags

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="link link--projects slide-link"';
}


//Images

add_theme_support( 'post-thumbnails' );

add_image_size('work-featured-img', 669, 441);


}
