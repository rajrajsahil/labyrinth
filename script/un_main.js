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
	placeholderorignal="Answer..";
   
    
	$(".inputType").focusout(function() {
		if($(this).val()=='')
		{   
			placeholderorignal=$(this).attr("placeholder");
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
        $(this).attr("placeholder",placeholderorignal);
    });




// ********************************SIGN IN VALIDATION AND SIGNIN ***************************************************************

    $("#user-credentials").focusin(function(e) {
    	
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
						url: "controller.php",
						data : {credentials : credentials, 
							password : password ,
							functionname:"login"},
						type: "POST",
						
						success:function(result)
						{

						       	//alert(result);
						       		if(result==false)
						       		{
						       		
						       			$('#incorrect_data').css("display","inline-block");
						       			setTimeout(afterCss, 3000);
						                 function afterCss()
						                {
    						              $('#incorrect_data').css("display","none");
						                }
						       	     }
						       	    else{
						       		
						       		//alert(result);
						       		if(result>20)
						       		{
						       			window.location = "levels/congratulations.php";
						       		}
						       		else
						       		{
						       			window.location.href = "levels/"+result+".php";
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
				url: "../controller.php",
				data : {functionname:"logout"},
				type: "POST",
				success: function (result) {

					window.location = '../index.php';
			     }
		}); 
	});
	$('#goBack').click(function(event) {		       
		$.ajax({
				url: "../controller.php",
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
							url:"controller.php",
							data:{user:username,
								functionname:"checkuser"},
							type:"POST",
							success: function(result){
								console.log(result);
								//alert(result);
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
        pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        validity = pattern.test(email);
        if(email!='')
        {
				    if(validity==false)
				    {	
					        $(this).val("");
					        $(this).css({"border": "2px solid red"});
							$(this).attr('placeholder',"Not a valid email id ..");
                            signupflag=0;
					}
					else
					{	
						$.ajax({
							url:"controller.php",
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
		        if (contactvalidation.toString().length!=10)
		        {
                        
		  			    $(this).val("");
				    	$(this).css({"border": "2px solid red"});
						$(this).attr('placeholder',"Not a valid contact no ..");                       
                        signupflag=0;
                        
		        }
		        else
		        {	
		        	    			
						$.ajax({
						url:"controller.php",
						async: false,
						data:{usercontact:contact,
						functionname:"checkcontact"},
						type:"POST",
						success: function(result){
								console.log(result);
								//alert(result);
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
     $("#password").focusin(function(e) {
    	$(this).val(password);
        $(this).css({"border": "2px solid white"});
        $(this).attr('placeholder',passwordplaceholder);
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
		if(signupflag==1)
		{
		 $.ajax({
					url: "controller.php",
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
		                           	//alert("new data added");
					       			window.location = "levels/power.php";
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
    	$(".inputType").val('');
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

	    var answerspace=$('.level-answer').val();
	    var answer=answerspace.replace(/\s/g,'')
	    answer=answer.toLowerCase();
        console.log(answer);
        //alert("hello");
        if(answer!='')
        {
			$.ajax({
				url: "../controller.php",
				data : {functionname:"nextlevel",answer:answer},
				type: "POST",
				
				success:function(result)
				{	
					if(result=="incorrect answer")
					{
						//alert(result);
						$('#incorrect_answer').css("display","inline-block");
						setTimeout(afterCss, 3000);
						function afterCss()
						{
    						$('#incorrect_answer').css("display","none");
						}
						//alert("wrong ans");
						// $('#incorrect_answer').css("display","none");

						$('.level-answer').val("");

					}
					else
					{
						
						window.location = result+".php";
						
					} 

				}
					
			});
		}
	});
//******************************Added an event to submit the answer if a user press enter***************************************************
	$(document).keypress(function(e) {
	    if(e.which == 13) {
	        $(".button").click();
	    }
	});	

});		
