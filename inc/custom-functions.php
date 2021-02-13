<?php 

/*****************************************************
## Post Type: Portfolio
*****************************************************/

add_action('init', 'cobblerswardrobe_portfolio');

function cobblerswardrobe_portfolio() {
	register_post_type(
		'portfolio',
		array(
			'labels' => array(
			'name' => 'Portfolios',			
			'all_items' => 'All Portfolios',
			'singular_name' => 'portfolio',
			'add_new_item'=>'Add New Portfolio'

			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'can_export' => true,
			'hierachical' => true,						
		)
	);		
}


/**
 * Register a 'genre' taxonomy for post type 'book', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function protechinfinity_create_portfolio_tax() {   
 
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Categories', 'textdomain' ),
        'all_items'         => __( 'All Categories', 'textdomain' ),
        'view_item'         => __( 'View Category', 'textdomain' ),
        'parent_item'       => __( 'Parent Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Category', 'textdomain' ),
        'update_item'       => __( 'Update Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Category', 'textdomain' ),
        'new_item_name'     => __( 'New Category Name', 'textdomain' ),
        'not_found'         => __( 'No Categories Found', 'textdomain' ),
        'back_to_items'     => __( 'Back to Categories', 'textdomain' ),
        'menu_name'         => __( 'Categories', 'textdomain' ),
    );
 
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio_category' ),
        'show_in_rest'      => true,
    );
	 
	 
	register_taxonomy( 'portfolio_category', 'portfolio', $args ); 
	 
}
add_action( 'init', 'protechinfinity_create_portfolio_tax', 0 );