<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="row-fluid article-list">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="span6">
			<img src="/loremphoto/timthumb.php?h=150&w=350&src=/loremphoto/photo/<?php echo rand(1,6) ?>.jpg" />
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
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
		<ul class="pager">
			<li class="previous">
				<a href="#">&larr; Older</a>
			</li>
			<li class="next">
				<a href="#">Newer &rarr;</a>
			</li>
		</ul>
	</div>
</div>



<?php get_footer(); ?>