<!-- Loop Portfolio -->

<?php 
$the_porftfolio = new Wp_Query(array(
		'post_type'   	 => 'level_portfolio',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 3
	));
 ?>

<?php if( $the_porftfolio -> have_posts() ): while( $the_porftfolio -> have_posts() ) : $the_porftfolio -> the_post(); ?>

<article class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="portfolio-img col-md-7 col-lg-7 col-xs-12">
						<figure class="text-center">
							<a href="<?php echo get_post_meta( get_the_ID(), 'ver-projeto', true); ?>" title="imagem do projeto" target="_blank">
								<?php the_post_thumbnail(); ?>
							</a>
						</figure>
					</div>
					<div class="col-md-5 col-md-5 col-lg-5 col-xs-12">
						<hgroup>
							<h1>
								<a href="<?php echo get_post_meta( get_the_ID(), 'ver-projeto', true); ?>" title=""><?php the_title();  ?></a> 
							</h1>
							<h2>
								<?php the_content(); ?>
							</h2>
						</hgroup>

						<a href="<?php echo get_post_meta( get_the_ID(), 'ver-projeto', true); ?>" tile="Ver o projeto" target="_blank" class="btn-projeto">
							Veja o projeto
						</a>
					</div>
				</div>
</article><!--Porfolio-->



<?php 
	wp_reset_postdata();
	endwhile;
?>

<?php endif; ?>
