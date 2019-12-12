<?php
// Register Portfolio category Taxonomy
function portfolio_cat_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Категории', 'Taxonomy General Name', 'roi' ),
		'singular_name'              => _x( 'Категория', 'Taxonomy Singular Name', 'roi' ),
		'menu_name'                  => __( 'Категории', 'roi' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio_cat', array( 'portfolio' ), $args );

}
add_action( 'init', 'portfolio_cat_taxonomy', 0 );