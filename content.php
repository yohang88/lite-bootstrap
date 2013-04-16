<div class="row-fluid">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="span12">
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
        <?php comments_template( '', true ); ?>
    </div>
<?php endwhile; ?>
</div>
