$(document).ready(function (argument) {

	var credentials, password,username,password1,email,contact,functionname;
	
	
	$('#login-button').click(function(event) {
		
		
		credentials = $('#user-credentials').val();
		password = $('#user-password').val();
	    
			$.ajax({
				url: "logincontrol.php",
				data : {credentials : credentials, 
					password : password ,
					functionname:"login"},
				type: "POST",
				
				success:function(result)
				{

				       	//alert(result);
				       		if(result==false){

				       		//window.location = "level1.php";
				       		alert("invalid input");
				       	}
				       	else{
				       		var glevelno = result;
				       		var glevel  ='level'+result;
				       		window.location = glevel;
				       		//alert(glevel);
				       		//alert("invalid input");
				       	}
				}
				       

				

			});
		
	});
		$('#logout-button').click(function(event) {		       
         
		$.ajax({
			url: "logincontrol.php",
			data : {functionname:"logout"},
			type: "POST",
			success: function (result) {

				window.location = 'index.php';
			}
		}); 
	});

	$('#signup-button').click(function(event) {
		event.preventDefault(event);
		
		username = $('#username').val();
		password1 = $('#password').val();
		email=$('#email').val();
		contact=$('#contact').val();



		
			$.ajax({
				url: "logincontrol.php",
				data : {username : username, 
					password1 : password1,
					email:email,
					contact:contact,
					functionname:"signup" },
				type: "POST",
				
				success:function(result){
					if(result==true){

				       		window.location = "level1.php";
				       	}
				       	else if(result ="This username already exist")
				       	{
				       		alert(result);
				       	}
				       	else{
				       		alert("invalid input");
				       	}
					}

			});
		
	});
});