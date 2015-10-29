<div class="utility-nav-container">

    <?php //get_search_form(); ?>

    <?php 
    $current_user = wp_get_current_user();
    //var_dump($current_user);

    if ( !is_user_logged_in() ) : ?>

    <ul class="buttons">
        <li><a href="<?php echo get_permalink('117');?>">Contact</a></li>
        <li><a href="<?php echo get_permalink('7');?>" class="btn sign-in" >Sign In / Register</a></li> 
    </ul>

    <ul class="utility-menu">

        <li>
            <p>Hello there</p>
        </li>

        <li>
            <?php
            /**
            * Middle header hooks that can be used for plugin and theme extensions
            *
            * Currently: WooCommerce Shopping Cart
            */
            do_action('vc_cart'); ?>
        </li>
    
    </ul>
                        
    <?php else : ?> 

    <ul class="buttons">
        <li><a href="<?php echo get_permalink('117');?>">Contact</a></li>
        <li><a href="<?php echo get_permalink('7');?>" class="btn sign-in" >My Account</a></li> 
    </ul>

    <ul class="utility-menu"> 

        <li>
            <p>Hello <?php echo ucfirst($current_user->user_nicename); ?></p>
        </li>
        
        <li>
            <?php
            /**
            * Middle header hooks that can be used for plugin and theme extensions
            *
            * Currently: WooCommerce Shopping Cart
            */
            do_action('vc_cart'); ?>
        </li>
           
    </ul>

    <?php 
    endif; ?>    

                    


</div>