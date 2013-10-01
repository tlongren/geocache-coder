$(document).ready(function() {

	$('#decodeSubmit').click(function () {		

		var data = $("#decodeSubmitForm").serialize();

		$.ajax({

			url: "process.php",	

			type: "GET",
		
			data: data,		

			cache: false,

			success: function (html) {
				if (html=="good") {
					$('.notComplete').fadeOut('fast');
					$('.captchaFail').fadeOut('fast');
					$.ajax({
						url: "getDecodedMessage.php",	
						
						type: "GET",
							
						data: data,		

						cache: false,
						
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

		return false;
	});	
});	