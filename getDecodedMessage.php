<?php session_start(); ?>
<?php
function decodeHint($hint) {
	$result = str_rot13($hint);
	return $result;
}

$message = ($_GET['message']) ?$_GET['message'] : $_POST['message'];
$result = decodeHint($message);

print "<h2>Your Message:</h2><p>$result</p>";
?>
