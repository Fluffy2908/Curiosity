<?php
    
function post_type_produkt() {

	$labels = array(
		'name'                  => _x( 'Produkte', 'Post Type General Name', 'wifi' ),
		'singular_name'         => _x( 'Produkt', 'Post Type Singular Name', 'wifi' ),
		'menu_name'             => __( 'Produkte', 'wifi' ),
		'name_admin_bar'        => __( 'Produkte', 'wifi' ),
		'archives'              => __( 'Produkte Archives', 'wifi' ),
		'attributes'            => __( 'Item Attributes', 'wifi' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wifi' ),
		'all_items'             => __( 'Alle Produkte', 'wifi' ),
		'add_new_item'          => __( 'Neues Produkte hinzufugen', 'wifi' ),
		'add_new'               => __( 'Neues Produkte erstellen', 'wifi' ),
		'new_item'              => __( 'Neues Produkte', 'wifi' ),
		'edit_item'             => __( 'Produkte bearbeiten', 'wifi' ),
		'update_item'           => __( 'Produkte akualisieren', 'wifi' ),
		'view_item'             => __( 'Produkt Anschauen', 'wifi' ),
		'view_items'            => __( 'Produkte anschauen', 'wifi' ),
		'search_items'          => __( 'Produkt zuhen', 'wifi' ),
		'not_found'             => __( 'Kein Produkt gefunden', 'wifi' ),
		'not_found_in_trash'    => __( 'Nichts im Papierkorb gefunden', 'wifi' ),
		'featured_image'        => __( 'Featured Image', 'wifi' ),
		'set_featured_image'    => __( 'Set featured image', 'wifi' ),
		'remove_featured_image' => __( 'Remove featured image', 'wifi' ),
		'use_featured_image'    => __( 'Use as featured image', 'wifi' ),
		'insert_into_item'      => __( 'Insert into item', 'wifi' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wifi' ),
		'items_list'            => __( 'Items list', 'wifi' ),
		'items_list_navigation' => __( 'Items list navigation', 'wifi' ),
		'filter_items_list'     => __( 'Filter items list', 'wifi' ),
	);
	$args = array(
		'label'                 => __( 'Produkt', 'wifi' ),
		'description'           => __( 'Unsere Produkte', 'wifi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'show_in_rest'          => true,
	);
	register_post_type( 'produkt', $args );

}
add_action( 'init', 'post_type_produkt', 0 );
?>