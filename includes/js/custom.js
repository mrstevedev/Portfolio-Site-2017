jQuery( document ).ready(function($) {

	$('.thumbs>li').on( 'hover', function(){
		$(this)
			.find('.projects-overlay')
				.toggleClass('show');
		});	

$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});
});
