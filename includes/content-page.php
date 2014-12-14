<?php
/**
 * The template for displaying all page contents.
 *
 * @package Level system Page Quem Somos
 */
?>

<?php 
			// WP_Query arguments
$args = array (
	'page_id'                => '8',
	'pagename'               => 'Quem Somos',
);

// The Query
$query = new WP_Query( $args );

?>

 <?php if( $query -> have_posts() ): while( $query -> have_posts() ) : $query -> the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		 <p><?php the_content(); ?></p>

<?php 
	wp_reset_postdata();
	endwhile;
?>

<?php endif; ?>