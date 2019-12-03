<?php

function rz_widgets() {
    register_sidebar([
        'name'              =>  __('Footer Widget One', 'rezistorfilms' ),
        'id'                => 'footer-widget-1',
        'description'       => 'widget for footer area one',
        'class'             => 'footer__widget--one',
        'before_widget'     => '<li id="%1$s" class="widget %2$s">',
        'after_widget'      => '</li>',
        'before_title'      => '<h2 class="widget__title">',
        'after_title'       => '</h2>', 
    ]);
    register_sidebar([
        'name'              =>  __('Footer Widget Two', 'rezistorfilms' ),
        'id'                => 'footer-widget-2',
        'description'       => 'widget for footer area two',
        'class'             => 'footer__widget--two',
        'before_widget'     => '<li id="%1$s" class="widget %2$s">',
        'after_widget'      => '</li>',
        'before_title'      => '<h2 class="widget__title">',
        'after_title'       => '</h2>', 
    ]);
    register_sidebar([
        'name'              =>  __('Footer Widget Three', 'rezistorfilms' ),
        'id'                => 'footer-widget-3',
        'description'       => 'widget for footer area three',
        'class'             => 'footer__widget--three',
        'before_widget'     => '<li id="%1$s" class="widget %2$s">',
        'after_widget'      => '</li>',
        'before_title'      => '<h2 class="widget__title">',
        'after_title'       => '</h2>', 
    ]);
} 

?>