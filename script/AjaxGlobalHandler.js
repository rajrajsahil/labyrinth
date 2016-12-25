$(document).ready(function(){
	$(document).ajaxStart(function(){
		$('.ajax-progress').addClass('progress');
		$('#ms').addClass('show');
	});

	// $(".result").ajaxSend(function(){
	// 	console.log('ajaxSend triggered');
	// });

	$(".result").ajaxError(function(){
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});

	// $(".result").ajaxComplete(function(){
	// 	console.log('ajaxComplete triggered');
	// });

	$(".result").ajaxStop(function(){
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});

	$(".result").ajaxSuccess(function() {
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});
	// $(document).on('click', '.button', function(){
	// 	$('.ajax-progress').addClass('progress');
	// 	$('#ms').addClass('show');
	// });
});