<!-- Loop segmentos -->

<?php 
$the_segmentos = new Wp_Query(array(
		'post_type'   	 => 'rcnet_segmentos',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 3
	));
$id= get_the_id();
 ?>

<?php if( $the_segmentos -> have_posts() ): while( $the_segmentos -> have_posts() ) : $the_segmentos -> the_post(); ?>
	
	<article class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
    		<div class="row">
    			<figure>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">

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
    				<div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 pull-right">
    					<h3><a href="<?php echo get_post_type_archive_link( 'rcnet_segmentos' ); ?>"><?php the_title(); ?></a></h3>
    				</div>
    			</figure>
    		</div>
    	</article><!--Segmentos RCNET-->
<?php 
	wp_reset_postdata();
	endwhile;
?>

<?php endif; ?>

