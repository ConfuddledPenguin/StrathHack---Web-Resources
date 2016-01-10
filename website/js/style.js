
$(window).scroll(function(){
	
	if( $(window).scrollTop() > $('header').height() - 50){
		$('.navbar').addClass('scrolled');
	}else{
		$('.navbar').removeClass('scrolled');
	}

});