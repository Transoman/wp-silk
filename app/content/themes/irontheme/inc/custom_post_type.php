<?php
// Register Portfolio Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Портфолио', 'Post Type General Name', 'roi' ),
		'singular_name'         => _x( 'Портфолио', 'Post Type Singular Name', 'roi' ),
		'menu_name'             => __( 'Портфолио', 'roi' ),
		'name_admin_bar'        => __( 'Портфолио', 'roi' ),
	);
	$args = array(
		'label'                 => __( 'Портфолио', 'roi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'portfolio_cat' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );