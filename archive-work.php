<?php get_header(); ?>

<main class="our-work">

    <header class="mb-5 page-header"><!-- PAGE HEADER WITH TITLE =====================
    ======================================================== -->
        <div class="container">

            <div class="row">
                <div class="col-12 txt-center">

                    <h1 class="heading--primary">
                        <span class="red-underline">Our Work</span>
                    </h1>

                </div>
            </div>

        </div>   
    </header><!--# END PAGE HEADER -->



    <section class="work-filters mb-10"><!-- WORK FILTERS=====================    
    ==========================-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <?php echo do_shortcode( '[searchandfilter id="136"]' ); ?>
                </div>
            </div>
        </div>
    </section><!-- #END WORK FILTERS -->



        <section><!-- LISTING WORKS=====================    
        ===========================-->

            <div class="portfolio-container">
            
                    <div class="our-work__grid" id="results">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                   
        
                        <div class="single-project"><!-- SINGLE PROJECT =====================
                            =================== -->

                                <a href="<?php the_permalink( ); ?>">

                                    <?php  the_post_thumbnail( 'work-featured-img', ['class' =>  'single-project__thumb']); ?>

                                    <h2 class="single-project__title">
                                        <?php the_title( ); ?><span class="single-project__title__arrow">&#10230;</span>
                                    </h2> 

                                </a> 
                                        
                        </div><!-- #END SINGLE PROJECT -->
                            

                        <?php endwhile; else : ?>
	                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>


                </div>
            </div>

        </section><!--# END LISTING WORKS-->
    
        
       
</main> 
<?php get_footer(  ); ?>