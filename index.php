<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geocaching Hint Decoder/Encoder</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/simplex.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
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
	<div class="container">
      <div class="jumbotron">
      <center>
        <h1>Geocache Coder</h1>
				<div id="decodeForm">
					<form method="post" action="index.php" id="decodeSubmitForm">
						<p>
							<label for="message">Message To Encode or Decode</label><br />
							<textarea name="message" id="message" rows="40" cols="100"></textarea>
							<div id='contactCaptcha'></div>
							<input type="submit" value="Do Work" class="btn btn-default" id="decodeSubmit" /> <input type="reset" value="Reset" class="btn btn-primary" />
						</p>
					</form>
				</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="notComplete"><p>All of the fields are required, please fill them out and click the <span class="button">Do Work</span> button again.</p></div>
							<div class="captchaFail"><p>You didn't click the correct captcha image, you must be a bot. If you're a real human, please try again.</p></div>
							<div class="decodedMessage"></div>
						</div>
					</div>
			</center>
      </div>
      <div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
      <div class="footer">
        <p>Built By <a href="http://www.longren.org/about/">Tyler</a></p>
      </div>

    </div> <!-- /container -->
</body>
</html>