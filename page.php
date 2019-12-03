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

    <?php 

    while( have_posts() ) {
        the_post();
    ?>

    <section>
        
        <div class="container">
            

            <div class="row">
                
                <div class="col-md-12">

                    <?php the_content(); ?>

                </div>

                
            </div>


        </div>
    
    </section>
    
    <?php }
    ?>

    
</main> 
<?php get_footer( ); ?>    