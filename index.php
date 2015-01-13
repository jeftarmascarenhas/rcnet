<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Project Name
 */

get_header(); ?>

<!-- #header -->
    <?php  get_template_part('includes/content', 'banner'); ?>
<!-- /#header -->

    <!-- Soluções -->
	    <section id="solucoes" class="features">
	      <div class="container">
	      	<h1 class="text-uppercase title-sections">Soluções</h1>
			<div class="row text-center">
				<?php get_template_part('includes/content', 'solucoes'); ?>
		   </div>
		   <!-- /.row -->
		</div>
		<!-- /.container -->
	    </section> 
    <!-- Soluções -->

    <!-- Segmentos -->
    <section id="segmentos" class="features">

    	   <!-- .container -->
    <div class="container">
        <h1 class="text-uppercase title-sections">Segmentos</h1>
    	<div class="row"> 
    
            <?php get_template_part('includes/content', 'segmentos'); ?>
        
			</div>
			<!-- /.row -->
    	 </div>
    <!-- /.container -->
    </section>
    <!-- /Segmentos -->

    <!-- Diferenciais -->
    <section id="diferenciais" class="features">
        <div class="container">
            <h1 class="text-uppercase title-sections">Diferenciais</h1>
            <div class="row">
                <?php get_template_part('includes/content', 'diferenciais'); ?>
            </div>
        </div>
    </section><!--/Diferenciais-->

<!--Depoimentos-->
    <section id="depoimentos" class="features">
        <div class="container">
            <h1 class="text-uppercase title-sections">O que os clientes falam da RCNET</h1>
            <div class="row">
                <?php get_template_part('includes/content', 'depoimentos'); ?>
            </div>
        </div>
    </section><!--/Depoimentos-->
 
 <!--/Nosso Clientes e Notícias( duas sections mesmo bloco)-->

 <div id="clientes-noticias" class="row-fluid">
     <section id="clientes" class="col-md-8 col-lg-8 col-sm-8 col-lg-12">
        
         <h1 class="text-uppercase title-sections">Nossos Clientes</h1>
        
        <?php get_template_part('includes/content', 'clientes'); ?>
      
     </section><!--/Clientes-->
     <section id="noticias" class="col-md-4 col-lg-4 col-sm-4 col-lg-12">
         <h1 class="text-uppercase title-sections">O que há de novo?</h1>
        
        <?php get_template_part('includes/content', 'noticias'); ?>
        
     </section><!--/Clientes-->
 </div>


<?php get_footer(); ?>