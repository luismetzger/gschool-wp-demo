<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gSchool WP Demo
 */

get_header(); ?>

	<div id="primary" class="content-area product">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h2 class="product-headline underline">Products</h2><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<div class="row">
				
				
				<div class="column two-third"></div>
				
				
				<ul class="product-list">
				
				<?php while ( have_posts() ) : the_post(); ?>
	
					<li class="column third">
								<img class="product-icon" src="<?php the_field('product_icon'); ?>">
								   <h3 class="product-title"><?php the_title(); ?></h3>
								     <p class="product-description"><?php the_field('product_description'); ?></p>
							    <div class="price">
								    <h3 class="product-price">$<?php the_field('product_price'); ?></h3>
							    </div>
								<div class="compare">
									<button class="checkbox"><input type="checkbox" />Buy Me</button>
	              				</div>
							</li>
	
				<?php endwhile; ?> <!-- End of Loop -->
				
				</ul>		
					
				
			</div><!-- End Row -->

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
