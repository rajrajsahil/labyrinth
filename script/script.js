function preloader(){
	setTimeout(function(){
        $('body').addClass('loaded');
    }, 6000);
}

$(document).ready(function(){
	
	setInterval( function() {
		var r = Math.floor(Math.random()*255);
		var g = Math.floor(Math.random()*255);
		var b = Math.floor(Math.random()*255);
		$('.foreground').css('background-color','rgba('+r+','+g+','+b+',0.7)');
	}, 300000);

	$( document ).ajaxComplete(function( event,request, settings ) {
	  $( "#msg" ).append( "<li>Request Complete.</li>" );
	});

	$('#background').mouseParallax({ moveFactor: 2 });
	$(document).on('click', "#signIn", function () {
		$('.loginHome').fadeOut(300);
		$('.loginPage').delay(300).fadeIn();
	});
	$(document).on('click', "#signUp", function () {
		$('.loginHome').fadeOut(300);
		$('.signUpPage').delay(300).fadeIn();
	});
	$(document).on('click', "#noAcBtn", function () {
		$('.loginPage').fadeOut(300);
		$('.signUpPage').delay(300).fadeIn();
	});
	$(document).on('click', "#accBtn", function () {
		$('.signUpPage').fadeOut(300);
		$('.loginPage').delay(300).fadeIn();
	});
});