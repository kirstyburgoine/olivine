<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">



	<?php
	get_template_part('includes/content', 'footer'); ?>




	<div class="seperator"></div>
	</div>

	<div class="credits">
		<?php 
		$company_number = get_field('company_number', 'options');
		$copyright_notice = get_field('copyright_notice', 'options'); ?>

		<div class="container">
						
				
				<p class="alignleft">© <?php echo date('Y'); ?> ~ <?php if ( $copyright_notice ) : echo $copyright_notice; else : ?><?php bloginfo('name'); endif;?>. <?php if ( $company_number ) : ?>Registered in England & Wales. Company No:<?php echo $company_number; endif;?>. Trademarks and brands are the property of their respective owners.</p>

			<div class="seperator"></div>

		</div>	

	</div>



</footer>









<a href="#" class="scrollup"><i class="ss-icon">navigateup</i></a>  
</body>




<?php wp_footer(); ?>

</html>