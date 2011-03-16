<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geocaching Hint Decoder/Encoder</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/1140.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script src="js/process.js" type="text/javascript"></script>
<script src="js/jquery.simpleCaptcha-0.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#contactCaptcha')
  .simpleCaptcha({
    numImages: 6,
    introText: 'To make sure you are human, please click on the <strong class="captchaText"></strong>.'
  });
});
</script>
</head>
<body>
	<div id="wrapper">
		<div id="mainContent">
			<div class="container">
			<div class="row">
			<div class="twelvecol last">
			<div id="decodeForm">
				<form method="post" action="index.php" id="decodeSubmitForm">
				<p>
				<label for="message">Message To Encode or Decode</label><br />
				<textarea name="message" id="message" rows="40" cols="100"></textarea>
				<div id='contactCaptcha'></div>
				<input type="submit" value="Do Work" class="button" id="decodeSubmit" /> <input type="reset" value="Reset" class="button" />
				</p>
				</form>
			</div>
			</div>
			</div>
			<div class="row">
				<div class="twelvecol last">
				<div class="notComplete">
					<p>All of the fields are required, please fill them out and click the <span class="button">Do Work</span> button again.</p>
				</div>
				<div class="captchaFail">
					<p>You didn't click the correct captcha image, you must be a bot. If you're a real human, please try again.</p>
				</div>
				<div class="decodedMessage">
					
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>