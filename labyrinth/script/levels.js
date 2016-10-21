$('#submit1-button').click(function(event) {
		level_ans = $('#level1-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level1_ans : level_ans, 
					functionname:"1"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level2.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit2-button').click(function(event) {
		level_ans = $('#level2-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level2_ans : level_ans, 
					functionname:"2"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level3.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit3-button').click(function(event) {
		level_ans = $('#level3-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level3_ans : level_ans, 
					functionname:"3"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level4.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit4-button').click(function(event) {
		level_ans = $('#level4-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level4_ans : level_ans, 
					functionname:"4"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level5.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit5-button').click(function(event) {
		level_ans = $('#level5-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level5_ans : level_ans, 
					functionname:"5"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level6.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit6-button').click(function(event) {
		level_ans = $('#level6-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level6_ans : level_ans, 
					functionname:"6"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level7.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit7-button').click(function(event) {
		level_ans = $('#level7-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level7_ans : level_ans, 
					functionname:"7"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level8.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit8-button').click(function(event) {
		level_ans = $('#level8-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level8_ans : level_ans, 
					functionname:"8"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level9.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit9-button').click(function(event) {
		level_ans = $('#level9-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level9_ans : level_ans, 
					functionname:"9"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level10.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit10-button').click(function(event) {
		level_ans = $('#level10-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level10_ans : level_ans, 
					functionname:"10"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level11.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit11-button').click(function(event) {
		level_ans = $('#level11-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level11_ans : level_ans, 
					functionname:"11"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level12.php";
				       	}
				       	else{
				       		alert("invalid input");
				       	}
				}
			});
	});
$('#submit12-button').click(function(event) {
		level_ans = $('#level12-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level12_ans : level_ans, 
					functionname:"12"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level13.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit13-button').click(function(event) {
		level_ans = $('#level13-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level13_ans : level_ans, 
					functionname:"13"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level14.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit14-button').click(function(event) {
		level_ans = $('#level14-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level14_ans : level_ans, 
					functionname:"14"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level15.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit15-button').click(function(event) {
		level_ans = $('#level15-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level15_ans : level_ans, 
					functionname:"15"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level16.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit16-button').click(function(event) {
		level_ans = $('#level16-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level16_ans : level_ans, 
					functionname:"16"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level17.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit17-button').click(function(event) {
		level_ans = $('#level17-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level17_ans : level_ans, 
					functionname:"17"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level18.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit18-button').click(function(event) {
		level_ans = $('#level18-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level18_ans : level_ans, 
					functionname:"18"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level19.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
$('#submit19-button').click(function(event) {
		level_ans = $('#level19-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level19_ans : level_ans, 
					functionname:"19"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){
                        	window.location = "level20.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});

$('#submit20-button').click(function(event) {
		level_ans = $('#level20-ans').val();
	    $.ajax({
				url: "answers.php",
				data : {level20_ans : level_ans, 
					functionname:"20"},
				type: "POST",
				
				success:function(result)
				{
				       	if(result==true){

                        	window.location = "index.php";
				       	}
				       	else{
				       		alert("wrong ans");
				       	}
				}
			});
	});
