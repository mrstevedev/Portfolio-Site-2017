jQuery( document ).ready(function($) {

	$('.thumbs>li').on( 'hover', function(){
		$(this)
			.find('.projects-overlay')
				.toggleClass('show');
		});	
	});
