<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="row-fluid article-list">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="span6">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php
				if ( has_post_thumbnail() ) {
				  the_post_thumbnail('thumb-article');
				} else {
				  echo '<img data-src="holder.js/350x150" />';
				}
				?>
			</a>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>
	</div>
<?php else : ?>
	<div class="row-fluid">
	<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
	<?php get_search_form(); ?>
	</div>
<?php endif; ?>

<div class="row-fluid">
	<div class="span12">
	<?php content_nav( 'nav-below' ); ?>
	</div>
</div>

<?php get_footer(); ?>