<?php
get_header();
?>
<?php //if ( get_theme_mod('clean_home_category')) : ?>
	<div id="fh5co-portfolio">

		<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
			<!-- post -->

			<?php get_template_part('template-parts\content', 'preview'); ?>

			<?php $i++; endwhile; ?>
			<div class="clearfix"></div>
			<?php the_posts_pagination(array(
				'end_size' => 1,
				'mid_size' => 1,
				'type' => 'list',
			)); ?>
		<?php else: ?>
			<!--no-posts-->
			<?php _e('No posts in this category', 'clean'); ?>
		<?php endif; ?>

	</div>

<?php //endif; ?>

<?php
get_footer();