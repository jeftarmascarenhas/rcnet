<!-- loop Diferenciais-->

<?php 

$the_direnciais = new WP_Query( array(
  'post_type' => 'diferenciais',
  'posts_per_page' => 10,
  'tax_query' => array(
    array(
      'taxonomy' => 'diferenciais_category',
      'field' => 'slug',
      'terms' => 'lista-diferenciais'
    )
  )
) );
?>

<article class="col-md-8 col-lg-8 col-sm-8 col-xs-12 diferencias-text">
                    <div class="row">
    <?php if( $the_direnciais -> have_posts() ) : while( $the_direnciais -> have_posts() ) : $the_direnciais -> the_post(); ?>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 diferencias-text">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                                    <!-- <figure><img src="<?php echo WP_IMAGE_URL ?>/icon/check.png" alt=""></figure> -->
                                    <span class="check"></span>
                                </div>
                                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php the_excerpt(); ?></p> 
                                </div>
                            </div>
                        </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
                    </div>
                </article><!--Text check diferenciais-->


<!-- loop Diferenciais-->
<?php 
	$the_numeros_direnciais = new WP_Query( array(
  'post_type' => 'diferenciais',
  'posts_per_page' => 10,
  'tax_query' => array(
    array(
      'taxonomy' => 'diferenciais_category',
      'field' => 'slug',
      'terms' => 'dados'
    )
  )
) );
?>
                <article id="dados-difereciais" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center hidden-xs">
                    <div class="row">
                     <?php if( $the_numeros_direnciais -> have_posts() ) : while( $the_numeros_direnciais -> have_posts() ) : $the_numeros_direnciais -> the_post(); ?>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 divsao-border">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
               
                    </div>
                </article><!--Dados sobre o diferencial-->

