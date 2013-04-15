<?php

add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function content_nav( $html_id ) {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="<?php echo esc_attr( $html_id ); ?>">
        <ul class="pager">
            <li class="previous"><?php previous_posts_link( __( '&larr; Newer') ); ?></li>
            <li class="next"><?php next_posts_link( __( 'Older &rarr;' ) ); ?></li>
        </ul>
        </nav>
    <?php endif;
}
endif;