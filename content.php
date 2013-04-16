<div class="row-fluid">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="span12">
        <header class="entry-header">
        <h1><?php the_title() ?></h1>
        </header>

        <div class="entry-content">
        <?php the_content() ?>
        </div>

        <footer class="entry-meta">
        <?php comments_template( '', true ); ?>
        </footer>
    </div>
    </article>
<?php endwhile; ?>
</div>
