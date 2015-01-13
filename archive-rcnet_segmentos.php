<?php
/**
 * The template for displaying custom post type.
 *
 * @package Project Name
 */

get_header(); ?>

<?php 
$the_segmentos = new WP_Query(array(
		'post_type'   	 => 'rcnet_segmentos',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 6
	));
 ?>
	<!--#banner-->
<section id="banner-segmentos" >

	<article class="row">
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			<figure>
				<img src="<?php echo WP_IMAGE_URL ?>/banner-segmentos.jpg" alt="">
			</figure>
		</div>
	</article>
</section><!--/banner-->

<!-- Lista de segmentos -->
<?php if( $the_segmentos -> have_posts() ): while( $the_segmentos -> have_posts() ) : $the_segmentos -> the_post(); ?>
<section id="segmento-sigle">

 <div class="row">
 	<div class="col-md-9 teste">
 		<div class="row">
 			<div class="col-md-4">

 				<div class="row">
					<figure>
					 	<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
	    			 <?php
    $about_attachments = wpba_get_attachments(array(
    'post_id'             => current_post_id,
    'show_post_thumbnail' => false
)); 
    foreach($about_attachments as $attachment){ ?>
        <a href="<?php echo get_post_type_archive_link( 'rcnet_segmentos' ); ?>"><img src='<?php echo wp_get_attachment_url( $attachment->ID ); ?>'></a>
    <?php };
?>
	    				</div>
	    			</figure>

		    		<div class="col-sm-9 col-md-9 col-lg-9 col-xs-6 pull-right">
		    			<h3><?php the_title(); ?></h3>
		    		</div>
	 			</div>

 			</div>
 			<div class="col-md-8">
	 			 <h1><h2><?php the_field('titulo_da_descricao'); ?></h2></h1><!--
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p> -->
				<?php the_content(); ?>
 			</div>
 		</div>
 	</div>
 	<div class="col-md-3"><?php the_post_thumbnail(); ?></div>
 </div>

</section>


<?php 
	endwhile;
?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>




<?php get_footer(); ?>
