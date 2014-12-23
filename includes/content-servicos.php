<!-- loop Servicos-->
<?php 
	$the_query = new Wp_Query(array(
		'post_type'   	 => 'level_servicos',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 3
	));
?>

<?php if( $the_query -> have_posts() ) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

<article class="col-md-4 col-lg-4 col-xs-12">
				<figure>
					<!-- <img src="<?php echo WP_IMAGE_URL ?>/desenvolvimento.png" alt="Desenvolvimento Web Level System"> -->
					<?php the_post_thumbnail(); ?>
					<figcaption><h3><?php the_title(); ?></h3></figcaption>
				</figure>

				<?php the_content(); ?>

</article>

<?php 
	wp_reset_postdata(); 
	endwhile; 
?>
<?php endif; ?>