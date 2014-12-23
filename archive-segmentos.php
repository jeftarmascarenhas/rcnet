<?php
/**
 * The template for displaying custom post type.
 *
 * @package Project Name
 */

get_header(); ?>

<?php 
$the_segmentos = new Wp_Query(array(
		'post_type'   	 => 'rcnet_segmentos',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 3
	));
 ?>

<section id="segmento-sigle">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12-col-xs-12">
			<figure>
				<img src="<?php echo WP_IMAGE_URL ?>/banner-segmentos.jpg" alt="">
			</figure>
		</div>
	</div>

</section>


<?php get_footer(); ?>
