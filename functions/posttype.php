<?php
/**
 * Custom Post Type and Taxonomies configurations
 *
 * @package Project Name
 */

/*
 * Initialize Custom Post Types
 */

// add_action('init', 'init_handler');
// function init_handler() {

//     configPostTypeDefault();

// }

// /**
//  * Register Custom Post Types
//  */

// /* default */
// function configPostTypeDefault() {
// 	$labels = array(
// 		'name'                => _x('Default', 'post type general name'),
// 		'singular_name'       => _x('Default', 'post type singular name'),
// 		'add_new'             => __('Add'),
// 		'all_items'           => __('List'),
// 		'view_item'           => __('View'),
// 		'add_new_item'        => __('Add Default'),
// 		'edit_item'           => __('Edit'),
// 		'update_item'         => __('Update'),
// 		'search_items'        => __('Search'),
// 		'not_found'           => __('Not Found'),
// 		'not_found_in_trash'  => __('Not Found in Trash'),
// 		'menu_name'           => 'default',
// 		'parent_item_colon'   => ''
// 	);

// 	$args = array(
// 		'label'               => 'Label goes here',
// 		'description'         => 'Description goes here',
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'thumbnail' ),
// 		'taxonomies'          => array( 'category' ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'menu_position'       => 5,
// 		'menu_icon'           => get_bloginfo('template_directory') . '/assets/images/admin/default.png',
// 		'can_export'          => true,
// 		'has_archive'         => true,
// 		'exclude_from_search' => true,
// 		'publicly_queryable'  => true,
// 		'capability_type'     => 'post',
// 	);

// 	register_post_type( 'default', $args );
// }

// add_action('init', 'cpt_add_default_boxes');

// function cpt_add_default_boxes() {
//     register_taxonomy_for_object_type('category', 'default');
// }




//Custom type post Serviços

function registra_level_servicos() {
	$labels = array(
		'name'               => 'Serviços',
		'singular_name'      => 'Serviço',
		'menu_name'          => 'Serviços',
		'name_admin_bar'     => 'Serviço',
		'add_new'            => 'Adicionar Serviço',
		'add_new_item'       => 'Adicionar Serviço',
		'new_item'           => 'Adicionar Serviço',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista dos Serviços',
		'search_items'       => 'Encontrar',
		'parent_item_colon'  => 'Pais:',
		'not_found'          => 'Nada encontrado.',
		'not_found_in_trash' => 'Nada encontrado.',
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'           => get_bloginfo('template_directory') . '/assets/images/admin/default.png',
		'rewrite' => array('slug' => 'level_servicos'),
		'can_export' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array(
			'title', 
			'editor', 
			'author', 
			'thumbnail',  
			'excerpt', 
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			/*'page-attributes',*/
			'post-formats'
		),
	);
	
	// Registra o custom post
	register_post_type( 'level_servicos', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'level_servicos_category', 
		array( 
			'level_servicos' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'level_servicos_category'),
		)
	);
}
add_action( 'init', 'registra_level_servicos' );
 
// Adiciona o custom posts na query principal
function add_my_post_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'level_servicos' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );



//Custom type post Portfolio

function registra_level_portfolio() {
	$labels = array(
		'name'               => 'Portfólio',
		'singular_name'      => 'Portfólio',
		'menu_name'          => 'Portfólio',
		'name_admin_bar'     => 'Portfólio',
		'add_new'            => 'Adicionar Portfólio',
		'add_new_item'       => 'Adicionar Portfólio',
		'new_item'           => 'Adicionar Portfólio',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista do Portfólio',
		'search_items'       => 'Encontrar',
		'parent_item_colon'  => 'Pais:',
		'not_found'          => 'Nada encontrado.',
		'not_found_in_trash' => 'Nada encontrado.',
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'menu_icon'           => get_bloginfo('template_directory') . '/assets/images/admin/default.png',
		'rewrite' => array('slug' => 'level_portfolio'),
		'can_export' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array(
			'title', 
			'editor', 
			'author', 
			'thumbnail',  
			'excerpt', 
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			/*'page-attributes',*/
			'post-formats'
		),
	);
	
	// Registra o custom post
	register_post_type( 'level_portfolio', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'level_portfolio_category', 
		array( 
			'level_portfolio' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'level_portfolio_category'),
		)
	);
}
add_action( 'init', 'registra_level_portfolio' );
 
// Adiciona o custom posts na query principal
function add_portfolio_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'level_portfolio' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_portfolio_types_to_query' );



//Custom type post Banner

function registra_level_banner() {
	$labels = array(
		'name'               => 'Banner',
		'singular_name'      => 'Banner',
		'menu_name'          => 'Banner',
		'name_admin_bar'     => 'Banner',
		'add_new'            => 'Adicionar Banner',
		'add_new_item'       => 'Adicionar Banner',
		'new_item'           => 'Adicionar Banner',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista de Banners',
		'search_items'       => 'Encontrar',
		'parent_item_colon'  => 'Pais:',
		'not_found'          => 'Nada encontrado.',
		'not_found_in_trash' => 'Nada encontrado.',
	);

	
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 8,
		'menu_icon'           => get_bloginfo('template_directory') . '/assets/images/admin/default.png',
		'rewrite' => array('slug' => 'level_banner'),
		'can_export' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array(
			'title', 
			'editor', 
			'author', 
			'thumbnail',  
			'excerpt', 
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			/*'page-attributes',*/
			'post-formats'
		),
	);


	
	// Registra o custom post
	register_post_type( 'level_banner', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'level_banner_category', 
		array( 
			'level_banner' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'level_banner_category'),
		)
	);
}
add_action( 'init', 'registra_level_banner' );
 
// Adiciona o custom posts na query principal
function add_banner_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'level_banner' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_banner_types_to_query' );


