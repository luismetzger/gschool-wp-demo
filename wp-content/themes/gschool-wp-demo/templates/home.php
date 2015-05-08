<?php
/**
 * Template Name: Home Page
 *
 * @package gSchool WP Demo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="home-products">
				    <form class="watchlist">
						<ul class="product-list">
							
							<?php 
								$args = array(
									'post_type' => 'product',
									'posts_per_page' => 4
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
							
							<li>
								<img class="product-icon" src="<?php the_field('product_icon'); ?>">
								   <h3 class="product-title"><?php the_title(); ?></h3>
								     <p class="product-description"><?php the_field('product_description'); ?></p>
							    <div class="price">
								    <h3 class="product-price">$<?php the_field('product_price'); ?></h3>
							    </div>
								<div class="compare">
									<button class="button--icon button--green"><i class="fa fa-shopping-cart"></i> Buy Me <input type="checkbox" /></button>
	              				</div>
							</li>
              
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
                           
						</ul>		
					</form>		    
				</div>
			

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
