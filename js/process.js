$(document).ready(function() {
	
	//if submit button is clicked
	$('#decodeSubmit').click(function () {		
		
		//Get the data from all the fields
		var data = $("#decodeSubmitForm").serialize();
		
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "process.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html=="good") {					
					//hide the form
					$('.notComplete').fadeOut('fast');
					$('.captchaFail').fadeOut('fast');
					//$('#decodeForm').fadeOut('fast');
					$.ajax({
						//this is the php file that processes the data and send mail
						url: "getDecodedMessage.php",	
						
						//GET method is used
						type: "GET",
					
						//pass the data			
						data: data,		
						
						//Do not cache the page
						cache: false,
						
						//success
						success: function (html) {				
								$('.decodedMessage').fadeIn('fast');
								$(".decodedMessage").html(html);			
						}		
					});
				} else if (html=="notComplete") {
					$('.captchaFail').fadeOut('fast');
					$('.decodedMessage').fadeOut('fast');
					$('.notComplete').fadeIn('fast');
				} else if (html=="captchaFail") {
					$('.notComplete').fadeOut('fast');
					$('.decodedMessage').fadeOut('fast');
					$('.captchaFail').fadeIn('fast');
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
				
		//cancel the submit button default behaviours
		return false;
	});	
});	