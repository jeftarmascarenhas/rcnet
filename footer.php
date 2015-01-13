<?php
/**
 * The template for displaying the footer.
 *
 * @package Project Name
 */
?>

        </div>
        <!-- /#main -->

   

    <!-- #footer -->
    <footer id="footer" class="row-fluid"> 
	
		<article id="empresa-footer" class="col-md-3 col-lg-3 col-sm-3-col-xs-12">
			<figure>
				<figcaption><h2>Empresa</h2></figcaption>
				<img src="<?php echo WP_IMAGE_URL?>/logo.png" alt="RCNET Desenvilmento">
			</figure>
			<p>	
				A RC.NET é uma software house especializada no processo de informatização de micro, pequenas e grandes empresas, 
				oferecendo soluções em software de alta performance com a melhor relação custo/beneficio do mercado.
			</p>
		</article>
			<article id="apoio-footer" class="col-md-3 col-lg-3 col-sm-3-col-xs-12">
				<figure>
					<figcaption><h2>Apoio</h2></figcaption>
					<img src="<?php echo WP_IMAGE_URL?>/portodigital.jpg" alt="RCNET Desenvilmento">
				</figure>
				<p>Em quase 12 anos de atuação, o Porto Digital se consolidou com os investimentos realizados 
				   na melhoria dos processos de desenvolvimento de sotfware e com a instalação de dezenas de empresas
				   vindas de outras regiões da Região Metropolitana do Recife, de outros estados e até de outros países..consequat.
				</p>
			</article>
				<article id="boletim-footer" class="col-md-3 col-lg-3 col-sm-3-col-xs-12">
					<h2>Boletim Informativo</h2>
					<p>
					  Gostamos de manter nossos clientes atualizados sobre as notícias da RCNET, 
					  incluindo ofertas especiais. Nós só entraremos em contato com você, se for algo bom!
					</p>
					<form action="" class="form-inlin">
						<ol class="form-group">
							<li><input type="email" placeholder="Digite seu e-mail" required class="form-control"></li>
							<input type="submit" class="btn btn-default" value="Ok">
						</ol>
					</form>
				</article>
		<article id="contato-footer" class="col-md-3 col-lg-3 col-sm-3-col-xs-12">
			<h2>Contate-nos</h2>
			<ul>
				<li><i class="fa fa-home"></i> Rua do Bom Jesus, 171, Recife<br> Antigo - Recife-PE</li>
				 <li><i class="fa fa-phone"></i> 81 - 3030-9090</li>
				  <li><i class="fa fa-envelope"></i> <a href="mailto:contato@rcnet.com.br">contato@rcnet.com.br</a></li>				  
			</ul>		
			<ul class="list-inline redes-sociais">
				<li><a href="#" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
				 <li><a href="#" title="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</article>

    </footer>
    <!-- /#footer -->


    <?php wp_footer(); ?>

        <script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.1.7.0.js'><\/script>".replace(/HOST/g, location.hostname).replace(/PORT/g, location.port));
//]]></script>

</body>
</html>
