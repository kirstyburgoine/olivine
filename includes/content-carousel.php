<?php
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------
// Bootstrap Carousel 
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

        <?php 
        $i = 0;
        $s = 0;
        if ( have_rows('carousel') ) :
        ?>

            <div class="carousel-inner" role="listbox">

            <?php 
            while ( have_rows('carousel') ) : the_row(); $s++;
                    
                $main_image = get_sub_field('main_image');
                $strapline = get_sub_field('strapline'); 
                $strapline_colour = get_sub_field('strapline_colour'); 
                $button_text = get_sub_field('button_text'); 
                $button_link = get_sub_field('button_link');  ?>

                <div class="item <?php if ( $s == 1 ) : echo 'active'; endif; ?>">

                    <img src="<?php echo $main_image['sizes']['carousel-image'];?>" alt="" />

                    <div class="carousel-content">
                        <h1 <?php if ($strapline_colour) : echo 'class="'.strtolower($strapline_colour).'"'; endif; ?>><?php echo $strapline; ?></h1>
                        <a href="<?php echo $button_link; ?>" class="btn btn-large"><?php echo $button_text; ?></a>
                    </div>

                </div>

            <?php 
            endwhile; ?>

            </div>


            <!-- Indicators -->
            <ol class="carousel-indicators">

                <?php  
                while ( have_rows('carousel') ) : the_row(); $s++; ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $s++; ?>" <?php if ( $s == 1 ) : echo 'class="active"'; endif; ?>></li>
                <?php 
                endwhile; ?>
            
            </ol>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        <?php 
        endif; ?>

</div>