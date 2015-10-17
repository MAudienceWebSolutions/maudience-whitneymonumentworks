;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {

		if ( $win.width() < 767 ) {
			$('meta[name="viewport"]').attr('content', 'width=device-width, initial-scale=1, maximum-scale=1');
		}else{
			$('#viewport').attr('content', 'width=960');
		}

		$('.menu-trigger').on('click', function(e){
			e.preventDefault();

			$('.header').toggleClass('show-menu');
			$('.nav li').removeClass('selected');
		});

		$('.nav a').on('click', function(e){

			var li = $(this).parent('li');

			if ( li.find('ul').length && $win.width() < 767 && !li.is('.selected') ){
				e.preventDefault();
				li.addClass('selected').siblings().removeClass('selected');
			}else{
				$('.nav li').removeClass('selected');
			}
		})

	});

	$win
		.on('resize', function(){
			if ( $win.width() < 767 ) {
				$('meta[name="viewport"]').attr('content', 'width=device-width, initial-scale=1, maximum-scale=1');
			}else{
				$('#viewport').attr('content', 'width=960');
			}
		})
		.on('load', function(){

			$('.features-list .owl-carousel').owlCarousel({
				loop:true,
				margin:25,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					767:{
						items:3
					},
					1000:{
						items:3
					}
				}
			});

			var $container = $('.isotope-container');
			$container.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		 
			$('.gallery-nav a').click(function(){
				$('.gallery-nav .current').removeClass('current');
				$(this).addClass('current');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				 });
				 return false;
			});
		})
})(jQuery, window, document);