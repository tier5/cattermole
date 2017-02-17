<?php
add_action( 'init', 'cattermole_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cattermole_init() {
	$labels = array(
		'name'               => _x( 'Practice Areas', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Practice Area', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Practice Areas', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Practice Area', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Practice Area', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Practice Area', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Practice Area', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Practice Area', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Practice Area', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Practice Areas', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Practice Areas', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Practice Areas:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'practice-area' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'practice-area', $args );
}
