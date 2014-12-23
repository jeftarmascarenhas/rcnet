<!-- loop Diferenciais-->

<?php 

	$the_direnciais = new Wp_Query(array(
		'post_type'   	 => 'difereciais_banner',
		'catogory_name' => 'diferenciais',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 4
	));
?>

<article class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                    <div class="row">
    <?php if( $the_direnciais -> have_posts() ) : while( $the_direnciais -> have_posts() ) : $the_direnciais -> the_post(); ?>
                        <article class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                                    <figure><img src="<?php echo WP_IMAGE_URL ?>/icon/check.png" alt=""></figure>
                                </div>
                                <?php echo the_category(); ?>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </article>
<?php 
	wp_reset_postdata(); 
	endwhile; 
?>
<?php endif; ?>
                    </div>
                </article><!--Text check diferenciais-->


<!-- loop Diferenciais-->
<?php 
	$the_numeros_direnciais = new Wp_Query(array(
		'post_type'   	 => 'difereciais_banner',
		'post_not_in' 	 => array(get_the_id()),
		'posts_per_page' => 4
	));
?>
                <article id="dados-difereciais" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center hidden-xs">
                    <div class="row">
                     <?php if( $the_numeros_direnciais -> have_posts() ) : while( $the_numeros_direnciais -> have_posts() ) : $the_numeros_direnciais -> the_post(); ?>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 divsao-border">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
<?php 
	wp_reset_postdata(); 
	endwhile; 
?>
<?php endif; ?>                        
                    </div>
                </article><!--Dados sobre o diferencial-->

