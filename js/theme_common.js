$(document).ready(function(){
	$('.menu-mo__bg').hide();

	$('.menu-mo__btn-open').click(function(){
		$('.menu-mo__wrap').css('transform','translateX(0)');
		$('.menu-mo__bg').fadeIn()
	})

	$('.menu-mo__btn-close, .menu-mo__bg').click(function(){
		$('.menu-mo__wrap').css('transform','translateX(500px)');
		$('.menu-mo__bg').fadeOut()
	})

	$('.main-banner__txt').css('transform','translateY(0)');
})