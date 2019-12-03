<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="main-nav">

        <?php if(has_nav_menu( 'primary' )) {
            wp_nav_menu([
                'theme_location'    =>  'primary',
                'container' => 'div',
                'menu-class'    => 'primary',
                'fallback_cb'   => false,
                'depth' => 2
            ]);
        }
        ?>

        <?php if( function_exists('the_custom_logo') ) {
                the_custom_logo(); 
            } ?>

        <div class="main-nav__right">    

            <div class="main-nav__started">
                <a href="#contact" class="slide-link">Get Started</a>
            </div>

            <div class="main-nav__toggle">
                <div class="main-nav__toggle-bar"></div>
                <div class="main-nav__toggle-bar"></div>
                <div class="main-nav__toggle-bar"></div>
            </div>

        </div>

</nav>

