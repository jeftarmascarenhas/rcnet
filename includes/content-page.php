<?php
/**
 * The template for displaying all page contents.
 *
 * @package Level system Page Quem Somos
 */
?>


 <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		 <p><?php the_content(); ?></p>

<?php 
	wp_reset_postdata();
	endwhile;
?>

<?php endif; ?>