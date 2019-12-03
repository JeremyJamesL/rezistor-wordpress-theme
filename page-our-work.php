<?php get_header(); ?>

<main class="our-work">

    <header class="mb-5 page-header"><!-- PAGE HEADER WITH TITLE =====================
    ======================================================== -->
        <div class="container">

            <div class="row">
                <div class="col-12 txt-center">

                    <h1 class="heading--primary">
                        <span class="red-underline"><?php single_post_title(); ?></span>
                    </h1>

                </div>
            </div>

        </div>   
    </header><!--# END PAGE HEADER -->



        <section><!-- LISTING WORKS=====================    
        ===========================-->

            <div class="portfolio-container">
            
                    <div class="our-work__grid">
                    <!-- SECOND LOOP, THIS ONE THROUGH CPT 'WORK'=====================
                    ======================================================== -->
                    <?php

                    $args = [
                        'post_type'             =>      'work',
                        'posts_per_page'        =>      6
                    ];

                    $work = New wp_query($args);
                        
                        if( $work->have_posts()) : while( $work->have_posts()) : $work->the_post(); ?>

        
        
                        <div class="single-project"><!-- SINGLE PROJECT =====================
                            =================== -->

                                <a href="<?php the_permalink( ); ?>">

                                    <?php  the_post_thumbnail( 'work-featured-img', ['class' =>  'single-project__thumb']); ?>

                                    <h2 class="single-project__title">
                                        <?php the_title( ); ?><span class="single-project__title__arrow">&#10230;</span>
                                    </h2> 

                                </a> 
                                        
                        </div><!-- #END SINGLE PROJECT -->
                            


                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?><!--# END SECOND LOOP (THROUGH 'OUR WORK' CPT) -->
                </div>
            </div>

        </section><!--# END LISTING WORKS-->


</main> 
<?php get_footer(  ); ?>