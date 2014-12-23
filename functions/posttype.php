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
// 		'menu_icon'           => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
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

function registra_rcnet_solucoes() {
	$labels = array(
		'name'               => 'Soluções',
		'singular_name'      => 'Soluções',
		'menu_name'          => 'Soluções',
		'name_admin_bar'     => 'Soluções',
		'add_new'            => 'Adicionar Soluções',
		'add_new_item'       => 'Adicionar Soluções',
		'new_item'           => 'Adicionar Soluções',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista dos Soluçõess',
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
		'menu_icon'           => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
		'rewrite' => array('slug' => 'rcnet_solucoes'),
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
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
	register_post_type( 'rcnet_solucoes', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'rcnet_solucoes_category', 
		array( 
			'rcnet_solucoes' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria Soluções' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'rcnet_solucoes_category'),
		)
	);
}
add_action( 'init', 'registra_rcnet_solucoes' );
 
// Adiciona o custom posts na query principal
function add_my_post_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'rcnet_solucoes' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );



//Custom type post Portfolio

function registra_rcnet_segmentos() {
	$labels = array(
		'name'               => 'Segmentos',
		'singular_name'      => 'Segmentos',
		'menu_name'          => 'Segmentos',
		'name_admin_bar'     => 'Segmentos',
		'add_new'            => 'Adicionar Segmentos',
		'add_new_item'       => 'Adicionar Segmentos',
		'new_item'           => 'Adicionar Segmentos',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista do Segmentos',
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
		'menu_icon'           => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
		'rewrite' => array('slug' => 'rcnet_segmentos'),
		'can_export' => true,
		'taxonomies' => array('post_tag'),
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
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
	register_post_type( 'rcnet_segmentos', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'rcnet_segmentos_category', 
		array( 
			'rcnet_segmentos' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria Segmentos' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'rcnet_segmentos_category'),
		)
	);
}
add_action( 'init', 'registra_rcnet_segmentos' );
 
// Adiciona o custom posts na query principal
function add_segmentos_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'rcnet_segmentos' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_segmentos_types_to_query' );



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
		'menu_icon'           => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
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


//Custom type post Diferenciais

function registra_difereciais_banner() {
	$labels = array(
		'name'               => 'Diferenciais',
		'singular_name'      => 'Diferenciail',
		'menu_name'          => 'Diferenciais',
		'name_admin_bar'     => 'Diferenciais',
		'add_new'            => 'Adicionar Diferenciais',
		'add_new_item'       => 'Adicionar Diferenciais',
		'new_item'           => 'Adicionar Diferenciais',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Lista de Diferenciais',
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
		'menu_icon'           => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
		'rewrite' => array('slug' => 'difereciais_banner'),
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
	register_post_type( 'difereciais_banner', $args );
	
	// Registra a categoria personalizada
	register_taxonomy( 
		'difereciais_banner_category', 
		array( 
			'difereciais_banner' 
		), 
		array(
			'hierarchical' => true,
			'label' => __( 'Categoria' ),
			'show_ui' => true,
			'show_in_tag_cloud' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'difereciais_banner_category'),
		)
	);
}
add_action( 'init', 'registra_difereciais_banner' );
 
// Adiciona o custom posts na query principal
function add_diferenciais_types_to_query( $query ) {
	if ( $query->is_main_query() && is_home() ) {
		$query->set( 'post_type', array( 'post', 'difereciais_banner' ) );
		return $query;
	}
}
add_action( 'pre_get_posts', 'add_diferenciais_types_to_query' );