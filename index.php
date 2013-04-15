<?php get_header(); ?>


	<?php if ( have_posts() ) : ?>
	<div class="row-fluid">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="span12">
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
			<?php comments_template(); ?>
		</div>
	<?php endwhile; ?>
	</div>
	<?php else : ?>
	<div class="row-fluid">
		<div class="span12">
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
		<?php get_search_form(); ?>
		</div>
	</div>
	<?php endif; ?>


<?php get_footer(); ?>