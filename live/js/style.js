

$(window).scroll(function(){
	
	if( $(window).scrollTop() > $('header').height() - 50){
		$('.navbar').addClass('scrolled');
	}else{
		$('.navbar').removeClass('scrolled');
	}

});

$('#nav-about').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1000);

})

$('#nav-faq').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#faq").offset().top
    }, 1000);

})

$('#nav-timeline').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#timeline").offset().top
    }, 1000);

})

$('#nav-location').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#location").offset().top
    }, 1000);

})

$('#nav-sponsors').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#sponsors").offset().top
    }, 1000);

})

$('#nav-signup').click(function(event){

	event.preventDefault();

	clearCurrent();
	$(this).addClass('current');

	$('html, body').animate({
        scrollTop: $("#signup").offset().top
    }, 1000);

})

function clearCurrent(){


	$('.navbar-nav').children().each(function(){
		$(this).removeClass('current');
	})

}