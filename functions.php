<?php

add_theme_support( 'post-thumbnails' );
add_image_size('thumb-article', 350, 150, true);

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

// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
    if ( $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'page', 'quote', 'photo', 'video' ) );
    return $query;
}

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => 'Primary Menu'
        )
    );
}

function new_excerpt_length($length) {
    return 13;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );
function additional_active_item_classes($classes = array(), $menu_item = false){
    if(in_array('current-menu-item', $menu_item->classes)){
        $classes[] = 'active';
    }

    return $classes;
}