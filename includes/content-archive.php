<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<header class="post-header">
		
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'parenttheme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	             
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'parenttheme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			        
				        <?php 
							// get the post thumbnail
							the_post_thumbnail( 'thumbnail', array('class' => 'alignleft')); 
						?>

					</a>
		        </div>
		    <?php endif; ?>

		    <div class="entry-content">

		    <?php if ( in_category('3') ) : ?>

				<p class="meta">

					<?php
					$date = get_field('event_date');
					// $date = 19881123 (23/11/1988)

					// extract Y,M,D
					$y = substr($date, 0, 4);
					$m = substr($date, 4, 2);
					$d = substr($date, 6, 2);

					// create UNIX
					$time = strtotime("{$d}-{$m}-{$y}");

					if ( $time ) :
					?>
					<span class="ss-icon ss-standard">date</span>						
					<?php echo date( 'l jS F Y', $time ); 

					endif; ?>

				</p>

			<?php endif; ?>
	
		    <?php 
        		the_excerpt(); ?>
        	</div>

    
    	<div class="seperator"></div>



			<div class="meta">
				
				<?php if ( in_category('2')) :  ?>
				<span class="date-posted">Posted <?php the_time('jS F Y') ?></span>
		                
		        <span class="sep"> | </span>

		    <?php else : endif; ?>
	                
	            <?php
						
	            // translators: used between list items, there is a space after the comma 
	            $categories_list = get_the_category_list( __( ', ', 'parenttheme' ) );
				$categories = str_replace('rel="category tag"', '', $categories_list);
	        	if ( $categories_list ): ?>
	                
	            <span class="cat-links">
	            	<?php printf( __( 'In: %2$s', 'parenttheme' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories ); ?>
	                    
	                <span class="sep"> | </span>
	            </span>
	                
		        <?php 
		        endif; // End if categories ?>
				
				
	            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Read more about %s', 'parenttheme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="read-more">Read More »</a>
	            
			</div>

   




</article><!-- #post-<?php the_ID(); ?> -->