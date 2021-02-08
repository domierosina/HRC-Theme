<?php

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'HRC 2019 Theme' ),
) );

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 233);
return $excerpt;
}

add_theme_support( 'post-thumbnails' );

add_filter('wpiw_images_only', '__return_true');


/* Register the Customization Possibilities */

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
}
add_action( 'customize_register', 'mytheme_customize_register' );

/**
 * Register our sidebars and widgetized areas.
 *
 */

/* Widgets 1/4	*/

function widgets_init() {

	register_sidebar( array(
		'name'          => 'Bible Quote Rotation',
		'id'            => 'bible_quote_rotation',
		'before_widget' => '<div class="col-md-12 text-center pad-quote">',
		'after_widget'  => '</div>',
	) );

		register_sidebar( array(
		'name'          => 'Footer 2 Section',
		'id'            => 'footer_2',
		'before_widget' => '<div class="plain-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="sitefooter">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 3 Section',
		'id'            => 'footer_3',
		'before_widget' => '<div class="plain-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="sitefooter">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 4 Section',
		'id'            => 'footer_4',
		'before_widget' => '<div class="plain-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="sitefooter">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Upcoming Events',
		'id'            => 'upcoming_events',
		'before_title'  => '<h3 class="text-center home-news">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="row">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Single Posts',
		'id'            => 'blogposts_sidebar',
		'before_title'  => '<h5 class="sidebar">',
		'after_title'   => '</h5>',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'widgets_init' );


function HRC2019_registerSidebarAreas() {
    // Grab all pages except trashed
    $pages = new WP_Query(Array(
        'post_type' => 'page',
        'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit'),
        'posts_per_page'=>-1
    ));
    // Step through each page
    while ( $pages->have_posts() ) {
        $pages->the_post();
        // Ignore pages with no slug
        if ($pages->post->post_name == '') continue;
        // Register the sidebar for the page. Note that the id has
        // to match the name given in the theme template
        register_sidebar( array(
            'name'          => $pages->post->post_name,
            'id'            => 'widget_area_for_page_'.$pages->post->post_name,
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}
add_action( 'widgets_init', 'HRC2019_registerSidebarAreas' );

?>
