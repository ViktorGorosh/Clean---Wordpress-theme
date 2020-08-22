<?php
get_header();
?>
	<div id="fh5co-portfolio">

		<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
			<!-- post -->

			<?php get_template_part('template-parts\content', 'preview'); ?>

			<?php $i++; endwhile; ?>
		<?php else: ?>
			<!--no-posts-->
			<?php _e('No posts in this category', 'clean'); ?>
		<?php endif; ?>

	</div>

<?php
get_footer();
