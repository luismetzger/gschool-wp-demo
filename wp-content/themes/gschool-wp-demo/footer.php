<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gSchool WP Demo
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		
		<div class="row">
			
			<div id="footer-logo-brand">
		    
			    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				    <img id="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/frank-relish.svg" alt="Your Image Description Here" />
				</a>
		    </div>
			<div id="footer-nav"
			    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			    
			   
			    <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		    </div>
			    
			    
			<div class="site-info">
			<p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved.</p>
		</div><!-- .site-info -->
			    
		</div>
		
		
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
