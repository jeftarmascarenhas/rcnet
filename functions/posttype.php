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
			// 'author', 
			'thumbnail',  
			'excerpt', 
			// 'trackbacks',
			'custom-fields',
			// 'comments',
			// 'revisions',
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
			// 'trackbacks',
			'custom-fields',
			// 'comments',
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
			// 'editor', 
			// 'author', 
			'thumbnail',  
			'excerpt', 
			// 'trackbacks',
			'custom-fields',
			// 'comments',
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


// -----------------------------------------------------------------------------------------

/**
 * Add custom taxonomies Diferenciais
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function registra_diferenciais() {

$labels = array(
	'name'               => 'Diferenciais',
	'singular_name'      => 'Diferencial',
	'menu_name'          => 'Diferenciais',
	'name_admin_bar'     => 'Diferencial',
	'add_new'            => 'Adicionar Diferencia',
	'add_new_item'       => 'Novo',
	'new_item'           => 'Novo',
	'edit_item'          => 'Editar',
	'view_item'          => 'Visualizar',
	'all_items'          => 'Lista Diferenciais',
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
	'menu_position'      => 9,
	'menu_icon'          => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
	'rewrite' => array('slug' => 'diferenciais'),
	'can_export' => true,
	'taxonomies' => array('post_tag'),
	'supports' => array(
		'title', 
		// 'editor', 
		'author', 
		'thumbnail',  
		'excerpt', 
		// 'trackbacks',
		'custom-fields',
		// 'comments',
		'revisions',
		/*'page-attributes',*/
		'post-formats'
	),
);
 
// Registra o custom post diferenciais
register_post_type( 'diferenciais', $args );



// Registra a categoria personalizada
  // Add new "diferenciais" taxonomy to Posts
  register_taxonomy('diferenciais_category', 'diferenciais', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'diferenciais', 'taxonomy general name' ),
      'singular_name' => _x( 'diferenciais', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search diferenciais' ),
      'all_items' => __( 'All diferenciais' ),
      'parent_item' => __( 'Parent diferenciais' ),
      'parent_item_colon' => __( 'Parent diferenciais:' ),
      'edit_item' => __( 'Edit diferenciais' ),
      'update_item' => __( 'Update diferenciais' ),
      'add_new_item' => __( 'Add New diferenciais' ),
      'new_item_name' => __( 'New diferenciais Name' ),
      'menu_name' => __( 'Categorias diferenciais' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'diferenciais_category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'registra_diferenciais', 0);


/**
 * Add custom taxonomies Depoimentos
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function registra_depoimentos() {

$labels = array(
	'name'               => 'Depoimentos',
	'singular_name'      => 'Depoimentos',
	'menu_name'          => 'Depoimentos',
	'name_admin_bar'     => 'Depoimentos',
	'add_new'            => 'Adicionar Depoimentos',
	'add_new_item'       => 'Novo',
	'new_item'           => 'Novo',
	'edit_item'          => 'Editar',
	'view_item'          => 'Visualizar',
	'all_items'          => 'Lista Depoimentos',
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
	'menu_position'      => 10,
	'menu_icon'          => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
	'rewrite' => array('slug' => 'depoimentos'),
	'can_export' => true,
	'taxonomies' => array('post_tag'),
	'supports' => array(
		'title', 
		/* 'editor', 
		   'author', 
	   */
		'thumbnail',  
		'excerpt', 
		/*'trackbacks',*/
		'custom-fields',
		/*'comments',*/
		'revisions',
		/*'page-attributes',*/
		'post-formats'
	),
);
 
// Registra o custom post diferenciais
register_post_type( 'depoimentos', $args );



// Registra a categoria personalizada
  // Add new "depoimentos" taxonomy to Posts
  register_taxonomy('depoimentos_category', 'depoimentos', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'depoimentos', 'taxonomy general name' ),
      'singular_name' => _x( 'depoimentos', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search depoimentos' ),
      'all_items' => __( 'All depoimentos' ),
      'parent_item' => __( 'Parent depoimentos' ),
      'parent_item_colon' => __( 'Parent depoimentos:' ),
      'edit_item' => __( 'Edit depoimentos' ),
      'update_item' => __( 'Update depoimentos' ),
      'add_new_item' => __( 'Add New depoimentos' ),
      'new_item_name' => __( 'New depoimentos Name' ),
      'menu_name' => __( 'Categorias depoimentos' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'depoimentos_category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'registra_depoimentos', 0);


/**
 * Add custom taxonomies Clientes
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function registra_clientes() {

$labels = array(
	'name'               => 'Clientes',
	'singular_name'      => 'Clientes',
	'menu_name'          => 'Clientes',
	'name_admin_bar'     => 'Clientes',
	'add_new'            => 'Adicionar Clientes',
	'add_new_item'       => 'Novo',
	'new_item'           => 'Novo',
	'edit_item'          => 'Editar',
	'view_item'          => 'Visualizar',
	'all_items'          => 'Lista Clientes',
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
	'menu_position'      => 11,
	'menu_icon'          => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
	'rewrite' => array('slug' => 'clientes'),
	'can_export' => true,
	'taxonomies' => array('post_tag'),
	'supports' => array(
		'title', 
		/* 'editor', 
		   'author', 
	   */
		'thumbnail',  
		// 'excerpt', 
		/*'trackbacks',*/
		'custom-fields',
		/*'comments',*/
		// 'revisions',
		/*'page-attributes',*/
		'post-formats'
	),
);
 
// Registra o custom post diferenciais
register_post_type( 'clientes', $args );



// Registra a categoria personalizada
  // Add new "clientes" taxonomy to Posts
  register_taxonomy('clientes-category', 'clientes', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'depoimentos', 'taxonomy general name' ),
      'singular_name' => _x( 'Clientes', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Clientes' ),
      'all_items' => __( 'All Clientes' ),
      'parent_item' => __( 'Parent Clientes' ),
      'parent_item_colon' => __( 'Parent Clientes:' ),
      'edit_item' => __( 'Edit Clientes' ),
      'update_item' => __( 'Update Clientes' ),
      'add_new_item' => __( 'Add New Clientes' ),
      'new_item_name' => __( 'New Clientes Name' ),
      'menu_name' => __( 'Categorias Clientes' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'cliente-category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'registra_clientes', 0);


/**
 * Add custom taxonomies Notícias
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function registra_noticias() {

$labels = array(
	'name'               => 'Noticias',
	'singular_name'      => 'Noticias',
	'menu_name'          => 'Noticias',
	'name_admin_bar'     => 'Noticias',
	'add_new'            => 'Adicionar Noticias',
	'add_new_item'       => 'Novo',
	'new_item'           => 'Novo',
	'edit_item'          => 'Editar',
	'view_item'          => 'Visualizar',
	'all_items'          => 'Lista Noticias',
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
	'menu_position'      => 11,
	'menu_icon'          => get_bloginfo('template_directory') . '/public/images/admin/level-icon.png',
	'rewrite' => array('slug' => 'noticias'),
	'can_export' => true,
	'taxonomies' => array('post_tag'),
	'supports' => array(
		'title', 
		 'editor', 
		   'author', 
	   
		'thumbnail',  
		'excerpt', 
		/*'trackbacks',*/
		'custom-fields',
		/*'comments',*/
		// 'revisions',
		/*'page-attributes',*/
		'post-formats'
	),
);
 
// Registra o custom post diferenciais
register_post_type( 'noticias', $args );



// Registra a categoria personalizada
  // Add new "clientes" taxonomy to Posts
  register_taxonomy('noticias-category', 'noticias', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Noticia', 'taxonomy general name' ),
      'singular_name' => _x( 'Noticias', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Noticias' ),
      'all_items' => __( 'All Noticias' ),
      'parent_item' => __( 'Parent Noticias' ),
      'parent_item_colon' => __( 'Parent Noticias:' ),
      'edit_item' => __( 'Edit Noticias' ),
      'update_item' => __( 'Update Noticias' ),
      'add_new_item' => __( 'Add New Noticias' ),
      'new_item_name' => __( 'New Noticias Name' ),
      'menu_name' => __( 'Categorias Noticias' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'noticias-category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'registra_noticias', 0);