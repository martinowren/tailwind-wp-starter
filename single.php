
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WPMODEVSTARTER
 */

get_header();
?>
		<div class="single-blog-parent">
			<article class="single-blog">
				<div class="single-blog-title">
					<?php the_post_thumbnail( 'large' );?>
					<div class="text-section">
						<div class="text">	
							<h1><?php the_title(); ?></h1>
							<p><?php echo get_the_date('d') . '.' . get_the_date('m') . '.' . get_the_date('y'); ?></p>
						</div>
					</div>
				</div>
				<div class="single-blog-content">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php the_content();?>
							<?php endwhile; ?>
						<?php endif; ?>
				</div>
			</article>
		</div>



<?php
get_footer();