<?php // SINGLE CPT 'WORK' POST TEMPLATE//

get_header( ); ?>

<?php 

if( have_posts( ) ) {
    while( have_posts( ) ) {
        the_post();
?>

<main>

<!-- HEADER 
============================================= -->
<header class="header-homepage">


    <!--VIDEO CONTAINER ================================
    ====================-->
    <div class="header-homepage__video-container">
        

        <!-- VIDEO ====================================
        ========= -->
        <video preload loop class="header-homepage__video video--full-width  
                <?php 
                
                // Check if video needs to be scaled
                
                    if(get_field('video_scaling') == 'yes' ) {
                        echo esc_html( 'header-homepage__video--scale' );
                    } else {}?>

        ">

            <source src="<?php echo the_field('project_video_mp4'); ?>#t=2" type="video/mp4">
			<source src="<?php echo the_field('project_video_webm'); ?>#t=2" type="video/webm">
                
                <p>
                    Your browser doesn't support HTML5 video.
                    <a href="<?php echo get_template_directory_uri() . '/assets/videos/hani.mp4'; ?>">Download</a> the video instead.
                </p>
        </video><!--#VIDEO--> 
    
        <div class="header-homepage__shadow"></div>


         <!-- VIDEO CONTROLS ====================================
        ========= -->
        <div id="video-controls" class="video--full-width__controls">

            <button type="button" id="play-pause" class="video--full-width__controls--play"><i class="fas fa-play"></i></button>
            <!-- <input type="range" id="seek-bar" value="0"> -->
            <div class="video--full-width__controls--volandmute">
                <input type="range" id="volume-bar" min="0" max="1" step="0.05" value="1" class="video--full-width__controls--volume">
                <button type="button" id="mute" class="video--full-width__controls--mute"><i class="fas fa-volume-up"></i></button>
            </div>
            <button type="button" id="expand" class="video--full-width__controls--expand"><i class="fas fa-expand"></i></button>
        </div><!--#VIDEO CONTROLS END --> 



    </div><!--#VIDEO CONTAINER END--> 
    

    <!-- HEADER TEXT CONTENT ====================================
    ========= -->
    <div class="single-work-header__content">

        <h1 class="single-work-header__title mb-3"><?php the_title( ); ?></h1>

            <p class="single-work-header__descr mb-3"><?php if( get_field( 'project_description' )) {
                echo the_field('project_description');
            } ?></p>

             <a href="#overview" class="link link--after-title">Learn more<span class="link__arrow">&#10230;</span></a>

    </div><!--#HEADER TEXT CONTENT END-->  
    
    
</header><!-- #HEADER END -->


<section class="pt-15 pb-15" id="overview">

        <div class="container">

            <div class="row">
                <div class="col-md-8 mb-10">

                    <h2 class="mb-3 heading-small-white heading-small-white--line">Overview</h2>

                    <p class="single-work__overview">

                        <?php the_content(); ?>

                    </p>

                </div>

                <div class="col-md-4">

                    <div class="single-work__services mb-5">
                        
                        <h2 class="mb-3 heading-small-white">Services</h2>

                            <div class="single-work__services-list">

                                <?php 
                                
                                    the_terms( $post->ID, 'work_type', '', ', ' );

                                ?>

                            </div>    
                    </div>


                    <div class="single-work__directors mb-5">
                        
                        <h2 class="mb-3 heading-small-white">Director</h2>


                            <div class="single-work__directors-list">

                                <?php 
                                
                                    the_terms( $post->ID, 'director', '', ', ' );

                                ?>
                            </div>    


                    </div>

                    <div class="single-work__client">
                        
                        <h2 class="mb-3 heading-small-white">Client</h2>


                            <div class="single-work__client-list">

                                <?php 

                                if( get_field( 'client' ) ) {
                                    echo the_field( 'client' );
                                }
                                
                                
                                ?>
                            </div>    


                    </div>

                    

                </div>

            </div>


        </div>

</section>

<?php

    }

}

?>

<section class="related-works-section pb-15">

        
    <div class="container">



            <div class="row mb-5">

                <div class="col-md-12">

                    <h2 class="heading-small-white heading-small-white--line">More By This Director</h2>
                
                </div>

            </div>


        
            <div class="related-works-container">

                <div class="row">

                <?php

                    //get the taxonomy terms of custom post type
                    $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'work_type', array('fields' => 'ids') );
                     
                    //query arguments
                    $rp_query = array(
                        'post_type' => 'work',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'work_type',
                                'field' => 'id',
                                'terms' => $customTaxonomyTerms
                            )
                        ),
                        'post__not_in' => array ($post->ID),
                    );

                    //the query
                    $relatedPosts = new WP_Query( $rp_query );

                    //loop through query
                    if($relatedPosts->have_posts()){
                        while($relatedPosts->have_posts()){ 
                            $relatedPosts->the_post();
                    ?>

                    <div class="col-sm-4">

                        <div class="related-work">

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'full', ['class'  =>  'related-work__thumb']  ); ?>
                                    <h2 class="related-work__title"><?php the_title(); ?></h2>

                                </a>

                        </div>

                    </div>

                    <?php
                        }
                    } else {
                        //no posts found
                    }

                    //restore original post data
                    wp_reset_postdata();

                ?>

                </div>


            </div>


        
</section>

</main>

<?php get_footer(  ); ?>

