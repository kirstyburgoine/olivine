
 <header id="masthead" class="site-header" role="banner">

    <div class="container">

        <div class="mobile-display-none alignright">
            <?php get_template_part('includes/content','utility-nav'); ?>
        </div>


        <div class="logo-container">

            <h1 class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go back to the homepage" rel="home"><?php bloginfo('name');?></a>
            </h1>

        </div>



    </div>

    <nav id="primary-navigation" class="site-navigation primary-navigation navbar navbar-inverse" role="navigation">

        <div class="container">

            <div class="logo-container mobile">

                <h1 class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go back to the homepage" rel="home"><?php bloginfo('name');?></a>
                </h1>

            </div>

            <div class="desktop-display-none">
                <?php get_template_part('includes/content','utility-nav'); ?>
            </div>


            <div class="navbar-header">

              <button type="button" class="navbar-toggle ss-icon ss-standard " data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>
                    <span>Menu</span>
              
                </button>
              
            </div>

            <a class="screen-reader-text skip-link access" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
            
            <div class="navbar-collapse collapse">
            <?php
            wp_nav_menu( 
                array( 
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => 'false',
                'menu_class' => 'nav navbar-nav',
                'theme_location' => 'primary',
                'walker' => new wp_bootstrap_navwalker()
                ) 
            ); ?>    

            <?php
            if ( function_exists( 'woocommerce_product_search' ) ) {
                echo woocommerce_product_search( array( 'limit' => 20, 'submit_button' => 'Yes', 'submit_button_label' => 'Go' ) );
            }
            ?>        
            </div>

        </div>
    </nav>

    
</header> <!-- Closes Header -->