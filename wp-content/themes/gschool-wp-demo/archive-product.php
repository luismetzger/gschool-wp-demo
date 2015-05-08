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
				
				
			
				
				
				<ul class="product-list">
				
				<?php while ( have_posts() ) : the_post(); ?>
	
					<li class="column half">
								<img class="product-icon" src="<?php the_field('product_icon'); ?>">
								   <h3 class="product-title"><?php the_title(); ?></h3>
								     
								<div class="wrapper">
								  <h2>Would you really buy this?</h2>
								  
								  <p>Let us know and we can get more of it</p>
								  
								  <div class="ratings-box">
								    
								    <input type="radio" id="star5" name="rating" value="amazing" class="hidden-input" /><label for="star5" title="Amazing!">★</label>
								    <input type="radio" id="star4" name="rating" value="good" class="hidden-input" /><label for="star4" title="Good">★</label>
								    <input type="radio" id="star3" name="rating" value="average" class="hidden-input" /><label for="star3" title="Average">★</label>
								    <input type="radio" id="star2" name="rating" value="needs work" class="hidden-input" /><label for="star2" title="Needs Work">★</label>
								    <input type="radio" id="star1" name="rating" value="poor" class="hidden-input" /><label for="star1" title="Poor">★</label>
								    <p></p>
								  </div>  
								</div>
								     
								     
							    <div class="price">
								    <h3 class="product-price">$<?php the_field('product_price'); ?></h3>
							    </div>
								<div class="compare">
									<button class="button--icon button--green"><i class="fa fa-shopping-cart"></i> Buy Me <input type="checkbox" /></button>
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
