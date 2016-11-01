$(document).ready(function (argument) {

	var credentials, password,username,password1,email,contact,functionname,password2,placeholder;
	var signupflag=0;
	usernameplaceholder= $('#username').attr("placeholder");
	passwordplaceholder= $('#password').attr("placeholder");
	repasswordplaceholder= $('#re-password').attr("placeholder");
	emailplaceholder= $('#email').attr("placeholder");
	contactplaceholder= $('#contact').attr("placeholder");
	credentialplaceholder=$('#user-credentials').attr("placeholder");
	passplaceholder=$('#user-password').attr("placeholder");

   
    
	$(".inputType").focusout(function() {
		if($(this).val()=='')
		{   
			     
			$(this).css({"border": "2px solid red"});
			$(this).attr('placeholder',"*required field");
		}
		else
		{
			$(this).css({"border": "2px solid white"});
			
		}
        

    });
	$(".inputType").focusin(function() {
        $(this).css({"border": "2px solid white"});
    });




// ********************************SIGN IN VALIDATION AND SIGNIN ***************************************************************
	// $("#user-credentials").focusout(function() {
	// 	credentials = $('#user-credentials').val();
 //     //    if(credentials !='')
 //     //    {
			    	
	// 		  //   	$(this).val("");
	// 	   //  	    $(this).css({"border": "2px solid red"});
	// 				// $(this).attr('placeholder',"Not a valid username ..");
					
				
			

	//     // }

 //    });
    $("#user-credentials").focusin(function(e) {
    	$(this).val(credentials);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',credentialplaceholder);
    });
     $("#user-password").focusin(function(e) {
    	
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',passplaceholder);
    });  


	$('#login-button').click(function(event) {
	    credentials = $('#user-credentials').val();
		password = $('#user-password').val();
		if(credentials=='' && password=='')
		{
	    	$("#user-credentials").attr('placeholder','* Required field');
	    	$("#user-credentials").css({"border": "2px solid red"});
        	$("#user-password").attr('placeholder','* Required field');
        	$("#user-password").css({"border": "2px solid red"});	    	
		}
	    else if(credentials=='')
	    {
	    	$("#user-credentials").attr('placeholder','* Required field');
	    	$("#user-credentials").css({"border": "2px solid red"});
	    }
        else if (password=='')
        {
        	$("#user-password").attr('placeholder','* Required field');
        	$("#user-password").css({"border": "2px solid red"});
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
						       		if(result==false)
						       		{
						       		alert("please check username password");
						       	     }
						       	    else{
						       		
						       		alert(result);
						       		if(result>20)
						       		{
						       			window.location = "levels/congratulations.php";
						       		}
						       		else
						       		{
						       			alert("level"+result+".php");
						       			window.location.href = "levels/level"+result+".php";
						       			//$(location).attr("href", "level"+result+".php");
						       		}
						       		//alert(glevel);
						       		//alert("invalid input");
						         	}
						}
					
				});
		}
	});
	// ********************************SIGN IN VALIDATION AND SIGNIN FUNCTION OVER ***************************************************************
	$('#logout-button').click(function(event) {		       
         
		$.ajax({
				url: "../logincontrol.php",
				data : {functionname:"logout"},
				type: "POST",
				success: function (result) {

					window.location = '../index.php';
			     }
		}); 
	});





// ********************************SIGN UP VALIDATION AND SIGNUP ***************************************************************

	$("#username").focusout(function(e) {
		username = $('#username').val();
		if(username!='')
		{
			    if (! /^[a-zA-Z0-9_]+$/.test(username)||username.length<4) 
			    {
			    	$(this).val("");
		    	    $(this).css({"border": "2px solid red"});
					$(this).attr('placeholder',"Not a valid username ..");
                    signupflag=0;
				}
				else
				{	
					$.ajax({
							url:"logincontrol.php",
							data:{user:username,
								functionname:"checkuser"},
							type:"POST",
							success: function(result){
								console.log(result);
								alert(result);
								if(result==true)
								{
									signupflag=1;
								}
								else if(result == "username already taken")
								{	
									$("#username").val("");
									//username = "";
									//alert(username);
		    	   				 	$("#username").css({"border": "2px solid red"});
									$("#username").attr('placeholder',result);
                    				signupflag=0;
								}

							}
					});
					//signupflag=1;
				}	
				

	    }
    });
    $("#username").focusin(function(e) {
    	$(this).val(username);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',usernameplaceholder);
    });


	$("#email").focusout(function(e) {
		
        email=$('#email').val();
        if(email!='')
        {
				    if(email.indexOf('@')==-1 || email.indexOf('.')==-1 || email.indexOf('@')==0 || (email.indexOf('.')-email.indexOf('@')<=1 || (email.length-email.indexOf('.')<2)))
				    {	
					        $(this).val("");
					        $(this).css({"border": "2px solid red"});
							$(this).attr('placeholder',"Not a valid email id ..");
                            signupflag=0;
					}
					else
					{	
						$.ajax({
							url:"logincontrol.php",
							data:{useremail:email,
								functionname:"checkemail"},
							type:"POST",
							success: function(result){
								console.log(result);
								//alert(result);
								if(result==true)
								{
									signupflag=1;
								}
								else if(result == "email already taken")
								{	
									$("#email").val("");
									//username = "";
									//alert(username);
		    	   				 	$("#email").css({"border": "2px solid red"});
									$("#email").attr('placeholder',result);
                    				signupflag=0;
								}

							}
						});
					//signupflag=1;
					}	
		}
    });
    $("#email").focusin(function(e) {
    	$(this).val(email);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',emailplaceholder);
    }); 



    $("#contact").focusout(function(e) {
    	contact=$('#contact').val();
    	var conflag=0;
    	contactvalidation=contact;
    	
    	if(contact!='')
    	{
		        if (contactvalidation.toString().indexOf('+')==0 && contactvalidation.toString().indexOf('-')>0 && contactvalidation.toString().length!=14)
		        {
                        conflag=1;
                        signupflag=0;
                        
		        }
		        else if(contactvalidation.toString().indexOf('+')==0 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().length!=13)
		        {
		        	     conflag=1;
		        	     signupflag=0;
		        	     
		        }
		        else if(contactvalidation.toString().indexOf('+')==-1 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().length!=10)
		        {
		        		 conflag=1;
		        		 signupflag=0;
		        		 
		        }
		        else if(contactvalidation.toString().indexOf('+')==-1 && contactvalidation.toString().indexOf('-')==-1 && contactvalidation.toString().indexOf('0')==0 && contactvalidation.toString().length!=11)
		        {
		        		 conflag=1;
		        		 signupflag=0;
		        		 
		        }
		        else
		        {	
		        	    			
						$.ajax({
						url:"logincontrol.php",
						async: false,
						data:{usercontact:contact,
						functionname:"checkcontact"},
						type:"POST",
						success: function(result){
								console.log(result);
								alert(result);
								if(result==true)
								{
									signupflag=1;
								}
								else if(result == "contact already taken")
								{	
									$("#contact").val("");
									//username = "";
									//alert(username);
		    	   				 	$("#contact").css({"border": "2px solid red"});
									$("#contact").attr('placeholder',result);
                    				signupflag=0;
								}

							}
						});
					//signupflag=1;
					
		        		// signupflag=1; 
		        }



        }
        if(conflag==1)
        {		alert("boy");
  			    $(this).val("");
		    	$(this).css({"border": "2px solid red"});
				$(this).attr('placeholder',"Not a valid contact no ..");      	
        }
    });
    $("#contact").focusin(function(e) {
    	$(this).val(contact);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',contactplaceholder);
    });

   $("#re-password").focusout(function() {
	password1 = $('#password').val();
	password2=$('#re-password').val();
        if(password2 !='')
        {
			    if (password1!=password2)
			    {	
			    	$(this).val("");
		    	    $(this).css({"border": "2px solid red"});
					$(this).attr('placeholder',"Password does not match ..");
					signupflag=0;
				}
				else
					signupflag=1;
	    }

    });
    $("#re-password").focusin(function(e) {
    	
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',passplaceholder);
    });
     $("#username").focusin(function(e) {
    	$(this).val(username);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',usernameplaceholder);
    });

   

	$('#signup-button').click(function(event){
		event.preventDefault(event);
		username = $('#username').val();
		password1 = $('#password').val();
		email=$('#email').val();
		contact=$('#contact').val();
		password2=$('#re-password').val();

		if(username=='')
		{
			$('#username').css({"border": "2px solid red"});
			$('#username').attr('placeholder',"*required field");
			signupflag=0;
		}
		if(email=='')
		{
			$('#email').css({"border": "2px solid red"});
			$('#email').attr('placeholder',"*required field");
			signupflag=0;
		}
		if(contact=='')
		{
			$('#contact').css({"border": "2px solid red"});
			$('#contact').attr('placeholder',"*required field");
			signupflag=0;
		}
		if(password1=='')
		{
			$('#password').css({"border": "2px solid red"});
			$('#password').attr('placeholder',"*required field");
			signupflag=0;
		}
		if(password2=='')
		{
			$('#re-password').css({"border": "2px solid red"});
			$('#re-password').attr('placeholder',"*required field");
			signupflag=0;
		}
		alert(signupflag);
		if(signupflag==1)
		{
		 $.ajax({
					url: "logincontrol.php",
					data : {username : username, 
					password1 : password1,
					email:email,
					contact:contact,
					functionname:"signup" },
					type: "POST",
					success:function(result){
					           console.log(result);
					           if(result==1)
					           {
		                           	alert("new data added");
					       			window.location = "levels/level1.php";
					       	   }
					       	   else if(result =="This username already exist")
					       	   {
					       			alert(result);
					       	   }
                     }
		
						
		            
				});
		
		}
		
		 			
	});
	// ********************************SIGN UP VALIDATION AND SIGNUP OVER ***************************************************************
	//******************************color of inputfield turns to orignal after clicking on here button**********************************
    $('.noAcBtn').click(function()
    {
    	$(".inputType").css({"border": "2px solid white"});
    	$("#user-credentials").attr('placeholder',credentialplaceholder);
        $('#user-password').attr("placeholder",passplaceholder);
    	$('#username').attr("placeholder",usernameplaceholder);
    	$('#email').attr("placeholder",emailplaceholder);
    	$('#contact').attr("placeholder",contactplaceholder);
	    $('#password').attr("placeholder",passwordplaceholder);
	    $('#re-password').attr("placeholder",repasswordplaceholder);
	
	


    });


	//******************************over clicking on here button*****************************************************************************
	$('.level-answerbutton').click(function(event) {

	    var answer=$('.level-answer').val();
        console.log(answer);
        //alert("hello");
        if(answer!='')
        {
			$.ajax({
				url: "../logincontrol.php",
				data : {functionname:"nextlevel",answer:answer},
				type: "POST",
				
				success:function(result)
				{		//alert(result);
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
		}
	});
});			
