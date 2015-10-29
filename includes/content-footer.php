<div class="row">

	<div class="col-md-3 first widget-area" role="complementary">

		<aside class="widget">

			
				<?php 
				if ( is_active_sidebar( 'sidebar-2' ) ) : 
					dynamic_sidebar( 'sidebar-2' ); 
				endif; ?>


		</aside>

	</div>


	<div class="col-md-6 second widget-area" role="complementary">

		<div class="row">

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-3' ) ) : 
					dynamic_sidebar( 'sidebar-3' ); 
				endif; ?>

			</div>

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-4' ) ) : 
					dynamic_sidebar( 'sidebar-4' ); 
				endif; ?>
			
			</div>

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-5' ) ) : 
					dynamic_sidebar( 'sidebar-5' ); 
				endif; ?>
			
			</div>


		</div>

		<div class="row">

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-6' ) ) : 
					dynamic_sidebar( 'sidebar-6' ); 
				endif; ?>

			</div>

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-7' ) ) : 
					dynamic_sidebar( 'sidebar-7' ); 
				endif; ?>
			
			</div>

			<div class="col-sm-4 col-md-4">

				<?php 
				if ( is_active_sidebar( 'sidebar-8' ) ) : 
					dynamic_sidebar( 'sidebar-8' ); 
				endif; ?>
			
			</div>


		</div>

	</div>


	<div class="col-md-3 third widget-area" role="complementary">

		<aside class="widget">
		<?php get_template_part('includes/content', 'social-menu'); ?>
		</aside>

		<aside class="widget">

			<h3 class="widget-title"></h3>

			<?php 
			if ( is_active_sidebar( 'sidebar-9' ) ) : 
				dynamic_sidebar( 'sidebar-9' ); 
			endif; ?>

		</aside>

	</div>


</div>