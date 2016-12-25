$(document).ready(function(){
	$(document).ajaxStart(function(){
		$('.ajax-progress').addClass('progress');
		$('#ms').addClass('show');
	});

	// $(document).ajaxSend(function(){
	// 	console.log('ajaxSend triggered');
	// });

	$(document).ajaxError(function(){
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});

	$(document).ajaxComplete(function(){
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});

	$(document).ajaxStop(function(){
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});

	$(document).ajaxSuccess(function() {
		$('.ajax-progress').removeClass('progress');
		$('#ms').removeClass('show');
	});
	// $(document).on('click', '.button', function(){
	// 	$('.ajax-progress').addClass('progress');
	// 	$('#ms').addClass('show');
	// });
});