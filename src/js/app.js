 var main = function(){
	
 	//Inseri a class active no slide do Bootstrap

	$('.carousel-inner .item:eq(0), #carousel-indicators li:eq(0)').addClass('active');
            $('.carousel').carousel({
              interval: 2000,
              carrusel: 'cycle'
     });
};


$(document).ready(main);