<?php

function rz_enqueue_assets() {

    //Variables for functions

    $uri = get_template_directory_uri();
    $ver = RZ_DEV_MODE ? time() : false; // For caching, check for dev mode to display time to avoid cache. 


    //Register styles
    wp_register_style( 'rz_primary-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&display=swap'); //Change URL where necessary.Remember to change font-family and $var as well. 
    wp_register_style( 'rz_bootstrap', $uri . '/assets/css/bootstrap.min.css', [] , $ver );
    wp_register_style( 'rz_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' );
    wp_register_style( 'rz-scroll-animate', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_register_style( 'rz-style', $uri . '/scss/bundle.css' , [], $ver);   


    //Register scripts
    // wp_register_script( 'rz-scroll-animate-script', 'https://unpkg.com/aos@next/dist/aos.js', [] , '', true );
    wp_register_script('rz-script', $uri . '/js/main.js', [], $ver, true);


    //Enqueue styles
    wp_enqueue_style('rz_primary-font');
    wp_enqueue_style('rz_bootstrap');
    wp_enqueue_style('rz_fontawesome'); 
    wp_enqueue_style('rz-scroll-animate'); 
    wp_enqueue_style( 'rz-style');

    //Enqueue scripts
    // wp_enqueue_script( 'rz-scroll-animate-script');
    wp_enqueue_script( 'rz-script');
}