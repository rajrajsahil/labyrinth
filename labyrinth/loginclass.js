/*$(document).ready(function (argument) {
	var credentials, password,username,password1,email,contact,functionname;
	$('#login-button').click(function(event){
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
				    if(result==false)
				    {
				    	alert("invalid input");
				    }
				    else
				    {
				       	alert(result);
				       	window.location = "level"+result+".php";
				       		//alert(glevel);
				       		//alert("invalid input");
				    }
				}
			
		});
	});
	$('#logout-button').click(function(event){		       
        $.ajax({
				url: "logincontrol.php",
				data : {functionname:"logout"},
				type: "POST",
				success: function (result) {
				window.location = 'index.php';
			    }
		}); 
	});

	$('#signup-button').click(function(event){
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
				           if(result==1)
				           {
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
	$('.level-answerbutton').click(function(event){
		//var currentuser;
		//$.ajax({
				//url: "logincontrol.php",
				//data : {functionname:"getusername"},
				//type: "POST",
				//success: function (result) {
                //currentuser=result;
				//alert(currentuser);
				//}
		//});
		var answer=$('.level-answer').val();
        //console.log(answer);
		$.ajax({
				url: "logincontrol.php",
				data : {functionname:"nextlevel",answer:answer},
				type: "POST",
				
				success:function(result)
				{
                        if(result<=20){
					       	//alert("moved to level "+result);
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
});	*/
$(document).ready(function (argument) {

	var credentials, password,username,password1,email,contact,functionname,password2;
	$('#login-button').click(function(event) {
	    credentials = $('#user-credentials').val();
		password = $('#user-password').val();
	    if(credentials=='')
	    {
	    	alert("enter username");
	    }
        else if (password=='')
        {
        	alert("enter password");
        }
        else{
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
						       		alert("please check username password");
						       	     }
						       	    else{
						       		
						       		alert(result);
						       		if(result>20)
						       		{
						       			window.location = "congratulations.php";
						       		}
						       		else
						       		{
						       			window.location = "level"+result+".php";
						       		}
						       		//alert(glevel);
						       		//alert("invalid input");
						         	}
						}
					
				});
		}
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
    function formvalidation()
    {
		username = $('#username').val();
		password1 = $('#password').val();
		password2=$('#re-password').val();
		email=$('#email').val();
		contact=$('#contact').val();
		contactvalidation=contact;
		/*
    
		*/

		if(username=='')
	    {
	    	alert("compulsory field username");
	    }
        else if (email=='')
        {
        	alert("compulsory field email");
        } 
        else if(contact=='')
        {
        	alert("compulsory field contact");
        }
        else if (contactvalidation.toString().indexOf('+')==0 && contactvalidation.toString().indexOf('-')>0 && contactvalidation.toString().length!=14)
        {
        	alert("not a valid contact no");
        }
        else if(contactvalidation.toString().indexOf('+')==0 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().length!=13)
        {
        	    alert("not a valid contact no");	
        }
        else if(contactvalidation.toString().indexOf('+')==-1 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().length!=10)
        {
        		alert("not a valid contact no");
        }
        else if(contactvalidation.toString().indexOf('+')==-1 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().indexOf('0')==0 && contactvalidation.toString().length!=11)
        {
        		alert("not a valid contact no");
        }         
        else if (password1=='' || password2=='')
        {
        	alert("compulsory field password");
        }
        else if(password1!=password2)
        {
        	alert("passwords dont match");
        }
        else if(email.indexOf('@')==-1 || email.indexOf('.')==-1 || email.indexOf('@')==0 || (email.indexOf('.')-email.indexOf('@')<=1 || (email.length-email.indexOf('.')<2)))
        {
        	alert("not a valid email id");
        }  
        else
           return true;  	
    }
	$('#signup-button').click(function(event) {

        if (formvalidation())
         {
				contactno=$('#contact').val();
				

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
		}
		
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
