<?php
/**
 * The main page template file
 * Template Name: Full Width
 */

get_header(); 

if ( have_posts() ) : the_post();  ?>

<div class="container">


	<div class="row">

		<div class="col-xs-12 col-md-12">

			<?php the_content(); ?>

		</div>




	</div> <!-- // row -->

</div>

<?php endif; ?>

<?php get_footer(); ?>