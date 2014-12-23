<?php
/**
 * The template for displaying all page contents.
 *
 * @package Level system Page Serviços
 */
?>

<?php 
			// WP_Query arguments
$args = array (
	'page_id'                => '35',
	'pagename'               => 'Serviços',
);

// The Query
$query_servicos = new WP_Query( $args );

?>




 <?php if( $query_servicos -> have_posts() ): while( $query_servicos -> have_posts() ) : $query_servicos -> the_post(); ?>

<h1 class="text-center text-uppercase"><?php the_title(); ?></h1>
			<h2 class="text-center">
				 <?php the_content(); ?>
			</h2>

<?php 
	wp_reset_postdata();
	endwhile;
 ?>

<?php endif; ?>