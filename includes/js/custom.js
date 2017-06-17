jQuery( document ).ready(function($) {

	$('.thumbs>li').on( 'hover', function(){
		$(this)
			.find('.projects-overlay')
				.toggleClass('show');
	});		

$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  
  		$('nav navbar-nav li').removeClass('hvr-underline-from-center');

	}
});
