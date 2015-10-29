<?php
/**
 * The main home file
 * Template Name: Home
 */

get_header(); 


if ( have_posts() ) : the_post();  ?>


<div class="container">

	<div class="row">

		<div class="col-md-12">

			<?php
			get_template_part('includes/content','carousel'); ?>

		</div>

	</div>

	<div class="row steps">

		<?php
        $step_1 = get_field('step_1');
        $step_2 = get_field('step_2'); 
        $step_3 = get_field('step_3');   ?>


		<div class="col-md-4 step">
			<span class="number">1</span>
			<span class="text"><?php echo $step_1; ?></span>
			<div class="seperator"></div>
		</div>

		<div class="col-md-4 step">
			<span class="number">2</span>
			<span class="text"><?php echo $step_2; ?></span>
			<div class="seperator"></div>
		</div>

		<div class="col-md-4 step">
			<span class="number">3</span>
			<span class="text"><?php echo $step_3; ?></span>
			<div class="seperator"></div>
		</div>

	</div>

	<div class="row three-boxes">

	<?php
	$position_1_image = get_field('position_1_image');
	$position_1_heading = get_field('position_1_heading');
	$position_1_text_colour = get_field('position_1_text_colour');
	$position_1_link = get_field('position_1_link');

	$position_2_image = get_field('position_2_image');
	$position_2_heading = get_field('position_2_heading');
	$position_2_text_colour = get_field('position_2_text_colour');
	$position_2_link = get_field('position_2_link');

	$position_3_image = get_field('position_3_image');
	$position_3_heading = get_field('position_3_heading');
	$position_3_text_colour = get_field('position_3_text_colour');
	$position_3_link = get_field('position_3_link');
 	?>

		<div class="col-md-6 box-col">

			<div class="position-1">

				<a href="<?php echo $position_1_link; ?>">
					<img src="<?php echo $position_1_image['sizes']['home-image-landscape']; ?>" alt="<?php echo $position_1_image['alt']; ?>" />
				</a>

				<h1 <?php if ($position_1_text_colour) : echo 'class="'.strtolower($position_1_text_colour).'"'; endif; ?>><?php echo $position_1_heading;?></h1>

			</div>

			<div class="position-2">

				<a href="<?php echo $position_2_link; ?>">
					<img src="<?php echo $position_2_image['sizes']['home-image-landscape']; ?>" alt="<?php echo $position_2_image['alt']; ?>" />
				</a>

				<h1 <?php if ($position_2_text_colour) : echo 'class="'.strtolower($position_2_text_colour).'"'; endif; ?>><?php echo $position_2_heading;?></h1>

			</div>
			
		</div>

		<div class="col-md-6 box-col">

			<div class="position-3">

				<a href="<?php echo $position_3_link; ?>">
					<img src="<?php echo $position_3_image['sizes']['home-image-portrait']; ?>" alt="<?php echo $position_3_image['alt']; ?>" />
				</a>

				<h1 <?php if ($position_3_text_colour) : echo 'class="'.strtolower($position_3_text_colour).'"'; endif; ?>><?php echo $position_3_heading;?></h1>

			</div>
			
		</div>

	</div>


	</div> <!-- // row -->

</div>

<?php endif; ?>

<?php get_footer(); ?>