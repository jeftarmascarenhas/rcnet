<!-- loop Servicos-->
<?php 
	$the_query = new Wp_Query(array(
		'post_type'   	 => 'rcnet_solucoes',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 4
	));
?>

<?php if( $the_query -> have_posts() ) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

	<article class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
		<div class="box-solucoes">
				<figure>					
					<?php the_post_thumbnail(); ?>
					<figcaption><h3><?php the_title(); ?></h3></figcaption>
				</figure>

					<?php the_excerpt(); ?>
				

				<a href="#" class="btn btn-default">Saiba Mais</a>
		</div>
	</article>

<?php 
	wp_reset_postdata(); 
	endwhile; 
?>
<?php endif; ?>


