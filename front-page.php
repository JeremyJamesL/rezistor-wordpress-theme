<?php get_header( ); ?>

    
<!-- Header 
============================================= -->
<header class="header-homepage">


    <!--VIDEO CONTAINER ================================
    ====================-->
    <div class="header-homepage__video-container">
        

        <!-- VIDEO ====================================
        ========= -->
        <video preload playsinline loop class="header-homepage__video video--full-width">
            <source src="<?php echo the_field('homepage_video_mp4'); ?>#t=2" type="video/mp4">
			<source src="<?php echo the_field('homepage_video_webm'); ?>#t=2" type="video/webm">
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
        </div><!--#VIDEO CONTROLS--> 

    </div>
    <!--#VIDEO CONTAINER--> 
    
    <div class="header-homepage__content">
        <h1 class="heading--primary header-homepage__title mb-3">Production house and Creative agency.</h1>
        <a href="#work" class="link link--after-title ">Learn more<span class="link__arrow">&#10230;</span></a>
    </div>  
    
</header><!-- #header end -->


<!-- Projects 
============================================= -->
<section class="section section--projects" id="work">

    <div class="container mb-10">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-large-white heading-large-white--line"  data-aos="fade-right" data-aos-duration="1500">Story driven content that <span class="red-underline">drives</span> brand loyalty</h2>
            </div>
        </div>
    </div>

    <div class="mb-10 portfolio-container">
        <!-- <div class="row">
            <div class="col-lg-12"> -->

            <div class="portfolio-grid">

                <?php 
                

                    $args = [
                        'post_type'             =>      'work',
                        'posts_per_page'        =>      6
                    ];

                    $work = New wp_query($args);
                        
                        if( $work->have_posts()) : while( $work->have_posts()) : $work->the_post(); ?>

        
        
                        <div class="single-project portfolio-grid__item" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000"><!-- SINGLE PROJECT =====================
                            =================== -->

                                <a href="<?php the_permalink( ); ?>">

                                    <?php  the_post_thumbnail( 'work-featured-img', ['class' =>  'single-project__thumb']); ?>

                                    <h2 class="single-project__title">
                                        <?php the_title( ); ?><span class="link__arrow">&#10230;</span>
                                    </h2> 

                                </a> 
                                        
                        </div><!-- #END SINGLE PROJECT -->
                            


                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?><!--# END SECOND LOOP (THROUGH 'OUR WORK' CPT) -->
                
            </div>
    
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 txt-center">
                <a href="our-work" class="link link--projects slide-link">See all our work</a>
            </div>
            <!-- <div class="col-sm-6 txt-center">
                <a href="https://reel.io/__kQwPJ" class="link link--projects slide-link" target="_blank">View showreel</a>
            </div> -->
        </div>
    </div>

        

</section><!-- #projects end -->


<!-- Services
============================================ -->
<section class="section section--services">

    <div class="container mb-10">

        <div class="row mb-5">
            <div class="col-md-12"> 
                <h2 class="heading-large-black heading-large-black--line" data-aos="fade-right" data-aos-duration="1000">A <span class="red-underline">holistic approach</span> to video advertising</h2>
            </div>
        </div>

        
    </div>

    <div class="services">
                
            <div class="container">

                    <div class="row">

                        
                        
                        <div class="col-md-6 service" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" >
                            <h3 class="service__title">01 Branded content / commercials</h3>
                            <p class="service__descr">12 internationally renowned directors. Production team with over 50 years collective experience. A mission to deliver high impact storytelling.</p>
                            <a href="#" class="service__link link link--after-title">Learn more<span class="link__arrow">⟶</span></a>
                        </div>

                        <div class="col-md-6 service" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                            <h3 class="service__title">02 Branding & Design</h3>
                            <p class="service__descr">Our branding & design offering is intended to be supplementary to your branded content/ commercial campaign. We do a deep dive into identifying and developing your brand or product story, developing creative strategies and offering logo’s, style guides, Web development & product design.</p>
                            <a href="#" class="service__link link link--after-title">Learn more<span class="link__arrow">⟶</span></a>
                        </div>

  

                    </div>

                    <div class="row">


                        
                        <div class="col-md-6 service" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                            <h3 class="service__title">03 Marketing & Activation</h3>
                            <p class="service__descr">Our marketing and activation offering ensures you get the most out of your commercial/ content campaign by amplifying your reach. We offer interactive edits of your campaigns for social media and website use to drive audience engagement, curated events, online advertising & SEO.</p>
                            <a href="#" class="service__link link link--after-title">Learn more<span class="link__arrow">⟶</span></a>
                        </div>

                        <div class="col-md-6 service" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                            <h3 class="service__title">04 Music videos</h3>
                            <p class="service__descr">Our award winning Music Video directors have worked with chart topping artists the world over and continue to break barriers.</p>
                            <a href="#" class="service__link link link--after-title">Learn more<span class="link__arrow">⟶</span></a>
                        </div>


                    </div>


            </div>

    </div>

</section><!-- #services end -->




<!-- Brands
============================================ -->
<section class="section section--brands">

    <div class="container mb-10">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-large-white heading-large-white--line mb-5" data-aos="fade-right" data-aos-duration="1000"><span class="red-underline">Brands</span> we have worked with</h2>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="container">
        
            <div class="row">

                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                
                    <?php
                        $clientlogo1 = get_field('client_logo_1');
                        if( !empty( $clientlogo1 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo1['url']); ?>" alt="<?php echo esc_attr( $clientlogo1['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">


                    <?php
                        $clientlogo2 = get_field('client_logo_2');
                        if( !empty( $clientlogo2 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo2['url']); ?>" alt="<?php echo esc_attr( $clientlogo2['alt'] ); ?>"/>
                    <?php endif; ?>    


                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">

                    <?php
                        $clientlogo3 = get_field('client_logo_3');
                        if( !empty( $clientlogo3 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo3['url']); ?>" alt="<?php echo esc_attr( $clientlogo3['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">

                    <?php
                        $clientlogo4 = get_field('client_logo_4');
                        if( !empty( $clientlogo4 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo4['url']); ?>" alt="<?php echo esc_attr( $clientlogo4['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>

            </div>

            <div class="row">

                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                
                    <?php
                        $clientlogo5 = get_field('client_logo_5');
                        if( !empty( $clientlogo5 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo5['url']); ?>" alt="<?php echo esc_attr( $clientlogo5['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">


                    <?php
                        $clientlogo6 = get_field('client_logo_6');
                        if( !empty( $clientlogo6 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo6['url']); ?>" alt="<?php echo esc_attr( $clientlogo6['alt'] ); ?>"/>
                    <?php endif; ?>    


                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">

                    <?php
                        $clientlogo7 = get_field('client_logo_7');
                        if( !empty( $clientlogo7 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo7['url']); ?>" alt="<?php echo esc_attr( $clientlogo7['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">

                    <?php
                        $clientlogo8 = get_field('client_logo_8');
                        if( !empty( $clientlogo8 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo8['url']); ?>" alt="<?php echo esc_attr( $clientlogo8['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>

            </div>

            <div class="row">

                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                
                    <?php
                        $clientlogo9 = get_field('client_logo_9');
                        if( !empty( $clientlogo9 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo9['url']); ?>" alt="<?php echo esc_attr( $clientlogo9['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">


                    <?php
                        $clientlogo10 = get_field('client_logo_10');
                        if( !empty( $clientlogo10 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo10['url']); ?>" alt="<?php echo esc_attr( $clientlogo10['alt'] ); ?>"/>
                    <?php endif; ?>    


                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">

                    <?php
                        $clientlogo11 = get_field('client_logo_11');
                        if( !empty( $clientlogo11 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo11['url']); ?>" alt="<?php echo esc_attr( $clientlogo11['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>
                
                <div class="col-sm-3 brands__brand" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">

                    <?php
                        $clientlogo12 = get_field('client_logo_12');
                        if( !empty( $clientlogo12 ) ): ?>
                            <img src="<?php echo esc_url($clientlogo12['url']); ?>" alt="<?php echo esc_attr( $clientlogo12['alt'] ); ?>"/>
                    <?php endif; ?>    

                </div>

            </div>

        </div>
    </div>


</section><!-- #brands end -->


<section class="section section--contact" id="contact">

    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-large-white mg-center txt-center mb-5" data-aos="fade-right" data-aos-duration="1000">Ready to see how we can help you?</h2>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-12" data-aos="fade-left" data-aos-duration="1000">

                 <?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]'); ?>

            </div>


        </div>

    </div>

</section>




<?php get_footer(  ); ?>

