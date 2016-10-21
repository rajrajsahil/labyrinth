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
				       		alert("invalid input");
				       	     }
				       	    else{
				       		
				       		alert(result);
				       		window.location = "level"+result+".php";
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
				           if(result==1){
                            alert("new data added");
				       		window.location = "level1.php";
				       	   }
				       	   else if(result =="This username already exist")
				       	   {
				       		alert(result);
				       	   }

				}

		});
		
	});
	$('.level-answerbutton').click(function(event) {

		var currentuser;
		$.ajax({
				url: "logincontrol.php",
				data : {functionname:"getusername"},
				type: "POST",
				success: function (result) {
                currentuser=result;
				alert(currentuser);
				}
		});
		    
	    var answer=$('.level-answer').val();
        console.log(answer);
		$.ajax({
				url: "logincontrol.php",
				data : {functionname:"nextlevel",answer:answer},
				type: "POST",
				
				success:function(result)
				{
                        if(result<=20){
					       	alert("moved to level "+result);
					        window.location="level"+result+".php";
				        }  
				        else if(result>20)
				        {
				        	alert("congratulation");
				        	window.location="congratulations.php";

				        } 
				        else if(result=="incorrect answer")
				        {
				        	alert(result);
				        }


				}
				       

				

		});
	});
});		
