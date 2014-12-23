var main = function(){

	//Estrutura e Estilo
	$('.featurette').each(function(){

		var altura = $(this).height();
		altura = altura -220;
		$(this).css('min-height', altura);
	});
	
	//Navegacao
	$('.nav-menu li a').click(function(){ return false; });

	$('.nav-menu li a').click(function(){
		$('.nav-menu li a').removeClass('active');
		$(this).addClass('active'); 

		var posicao = $(this).attr('href');
		var alvo = $(posicao).position().top;
		$('html, body').animate({ scrollTop:alvo }, 1000);

		return false;
	});

	//Logo alvo incio da página
	$('.navbar-header a').click(function(){
		var posicaoHome = $(this).attr('href');
		var alvoHome = $(posicaoHome).position().top;
		$('html, body').animate({ scrollTop:alvoHome }, 1000);

		return false;

	});

	//Botao entrar em contato
	$('.header-image a').click(function() {
		var posicaoContato = $(this).attr('href');
		var alvoContato    = $(posicaoContato).position().top;
		$('html, body').animate({scrollTop: alvoContato}, 1000);

		return false;

	});

	//Configuracao do form contato
	$('#contato-toggle').click(function() {
		
		
		var ativoContato = $('#form-level').hasClass('contato-active');

		if(ativoContato === true){
			
			$('#form-level').removeClass('contato-active');

		}else{

			$('#form-level').addClass('contato-active'); 

		}

		return false;

	});

	
	//Formulário aparece quando chegar no scrollTop da seção contato
	$(window).scroll(function() {
		var alvoContato = $('#contato').position().top;
		var alvoCerto = parseInt(alvoContato) - 200;
		var topo = $(window).scrollTop();

		if( topo >= alvoCerto){
			
			$('#form-level').animate({scrollTop: alvoContato},2000).addClass('contato-active');
			console.log( alvoContato );

		} else if(topo < alvoCerto ){
			
			$('#form-level').removeClass('contato-active');

		}	
	});


		
	



	//Carousel Bootstrap
	// $('.carousel').carousel({
	// 	interval: 1500
	// }); 
};

$(document).ready(main);