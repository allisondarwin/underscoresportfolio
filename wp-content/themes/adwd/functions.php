<?php
/**
 * Allison Darwin functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Allison Darwin
 * @since Allison Darwin 1.0
 */

 // Theme support for menus
function adwd_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

    // Register Menus
    register_nav_menus( array (
        'top-nav' => __( 'Top Nav', 'adwd' ),
        'social-media'  => __( 'Social Media Nav', 'adwd' ),
    ) );
}
add_action( 'after_setup_theme', 'adwd_setup' );

// Enqueue scripts and styles.
function adwd_scripts() {
	wp_enqueue_style( 'adwd-style', get_stylesheet_uri() );
    wp_enqueue_style( 'adwd-google-fonts', 'https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@300;400;700&family=Poppins:wght@300;400;500;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'adwd_scripts' );

// Register widget area
function adwd_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'adwd' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your blog sidebar.', 'adwd' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'adwd_widgets_init' );

// Defines custom markup for post comments
function adwd_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';

	echo $comment;
}
