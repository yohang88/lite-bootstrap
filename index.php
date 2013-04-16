<?php get_header(); ?>

	<div class="row-fluid article-list">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="span6">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php
				if ( has_post_thumbnail() ) {
				  the_post_thumbnail('thumb-article');
				} else {
				  echo '<img data-src="holder.js/350x150/auto" />';
				}
				?>
			</a>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>
	</div>

<div class="row-fluid">
	<div class="span12">
	<?php content_nav( 'nav-below' ); ?>
	</div>
</div>

<?php get_footer(); ?>

