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



    <section><!-- LISTING WORKS BY DIRECTOR=====================
    ===========================-->

            <div class="container">
        
                <div class="our-work__grid" id="search-results">

                <!-- LOOP THROUGH CPT 'WORK'=====================
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

                    <?php }
                    } ?>         

                </div><!-- #END GRID  -->

        </div>

    </section><!--# END LISTING WORKS-->


    <section><!-- PAGINATION=====================
    =======================-->
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
    </section><!--# END PAGINATION-->

</main> 
<?php get_footer(  ); ?>