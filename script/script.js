function preloader(){
	setTimeout(function(){
        $('body').addClass('loaded');
    }, 6000);
}

$(document).ready(function(){

	

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