<footer class="footer">
    
    <div class="container">

        <div class="row footer__row">

            <div class="col-sm-4 footer__col">

                    <?php
                        if( is_active_sidebar( 'footer-widget-1' )) {
                            dynamic_sidebar( 'footer-widget-1' );
                        }
                    ?>
            </div>

            <div class="col-sm-4 footer__col">
                <?php
                    if( is_active_sidebar( 'footer-widget-3' )) {
                        dynamic_sidebar( 'footer-widget-3' );
                    }
                ?>
            </div>
        

            <div class="col-sm-4 footer__col">      
                    <?php
                        if( is_active_sidebar( 'footer-widget-2' )) {
                            dynamic_sidebar( 'footer-widget-2' );
                        }
                    ?>
            </div>
                
        </div>
        

        
        <div class="footer-copyright row"><!-- FOOTER COPYRIGHT
        ===============================-->

            <div class="col-sm-6">
                <p>&#169; Rezistor Studios 2019. All Rights Reserved.</p>
            </div>    

            <div class="col-sm-6">  
                <p><a href="https://rezistorstudios.com/privacy-policy/">Privacy Policy</a></p>
            </div>    

        </div><!-- # END FOOTER COPYRIGHT -->

           

    
    </div>

</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
  // Global settings:
  disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    });
  </script>

<?php wp_footer(); ?>

</body>
</html>