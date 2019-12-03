<?php get_header(); ?>

<main class="our-work">

        
            <header class="mb-5 page-header"><!-- PAGE HEADER WITH TITLE =====================
            ======================================================== -->
                <div class="container">

                    <div class="row">
                        <div class="col-12 txt-center">

                            <h1 class="heading--primary red-underline inline-block">
                                <?php single_term_title(); ?>
                            </h1>

                        </div>
                    </div>

                </div>   
            </header><!--# END PAGE HEADER -->

         <section class="section-director"><!-- DIRECTOR INFORMATION =====================
            ======================================================== -->

            <?php

                // get current taxonomy term
                $term = get_queried_object();
                            
                //vars
                $image = get_field('director_headshot', $term);
                $linkedin = get_field('director_linkedin', $term);
                $twitter = get_field('director_twitter', $term);
                $instagram = get_field('director_instagram', $term);
                
            ?>

            <section class="director pb-10 pt-5">

                <div class="container director__container">

                    <div class="row">

                        <div class="col-lg-3 txt-center">

                            <figure class="headshot mb-10">
                                <img src="<?php echo $image; ?>" alt="<?php single_term_title(); ?>" class="headshot__img">

                                <ul class="headshot__social">
                                    <?php if($instagram) { ?>
                                        <li class="headshot__social-link"><a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <?php } ?>
                                    <?php if($linkedin) { ?>
                                        <li class="headshot__social-link"><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <?php } ?>
                                    <?php if($twitter) { ?>
                                        <li class="headshot__social-link"><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <?php } ?>
                                </ul>

                            </figure>

                        </div>

                        <div class="col-lg-9">
                            <div class="director__description mb-5"><?php echo term_description(); ?></div>
                        </div>
                    
                    </div>

                </div>


         </section>   <!--# END DIRECTOR INFO -->

         <div class="container line mb-10"></div>


        <section><!-- LISTING WORKS BY DIRECTOR=====================
        ===========================-->

        <div class="container mb-10">

            <div class="row">

                <div class="col-md-12 txt-center">

                    <h2 class="heading-large-white inline-block"><?php single_term_title(); ?>'s work</h2>

                </div>    

            </div>
        
        </div>
        

                <div class="container">

            
                    <div class="our-work__grid">
                    <!--START LOOP=====================
                    ======================================================== -->

                    <?php
                        
                        if(have_posts()) {
                            while(have_posts()) {
                                the_post();
                    ?>

                                     
                        <div class="single-project"><!-- SINGLE PROJECT =====================
                            =================== -->

                                <a href="<?php the_permalink( ); ?>">

                                    <?php  the_post_thumbnail( 'work-featured-img', ['class' =>  'single-project__thumb']); ?>

                                    <h2 class="single-project__title">
                                        <?php the_title( ); ?><span class="single-project__title__arrow">&#10230;</span>
                                    </h2> 

                                </a> 

   
                                        
                        </div><!-- #END SINGLE PROJECT -->
                        
                        <?php 
                            }
                        } 
                        ?>         

                    </div><!-- #END GRID  -->

            </div>



        </section><!--# END LISTING WORKS-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <nav class="archive-pagination">
                            <span class="archive-pagination__next"><?php next_posts_link( 'Newer &rarr;' ); ?></span>
                            <span class="archive-pagination__previous"><?php previous_posts_link( '&larr; Older' ); ?></span>
                        </nav>

                    </div>
                </div>
            </div>
        </section>


</main> 
<?php get_footer(  ); ?>