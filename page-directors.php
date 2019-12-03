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


    <section class="directors-section">
        
        <div class="container">
            

            <div class="row">
                
                <div class="col-md-12">

                    <?php

                        //Set Director Variables
                        $directorNames = get_terms(
                            array(
                                'taxonomy'   => 'director',
                                'hide_empty' => false,
                            )
                        );

                    ?>
                    
                    <ul class="director-list">    

                            <?php
                            
                                // Check if any term exists
                                if ( ! empty( $directorNames ) && is_array( $directorNames ) ) {
                                    // Run a loop and print them all
                                    foreach ( $directorNames as $directorName ) { ?>

                                    <!-- Display single director -->
                                    <li class="director-name">
                                        <a href="<?php echo esc_url( get_term_link( $directorName ) ) ?>" class="director-name__link slide-link">
                                            <?php echo $directorName->name; ?>
                                        </a>
                                    </li>   

                            <?php
                                    }
                                } 

                            ?>

                     </ul>

                </div>

                
            </div>


        </div>
    
    </section>
    
    
</main> 
<?php get_footer( ); ?>    