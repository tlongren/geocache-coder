<?php session_start(); ?>
<?php
function decodeHint($hint) {
	$key = array("A" => "N","B" => "O","C" => "P","D" => "Q","E" => "R","F" => "S","G" => "T","H" => "U","I" => "V","J" => "W","K" => "X","L" => "Y","M" => "Z","N" => "A","O" => "B","P" => "C","Q" => "D","R" => "E","S" => "F","T" => "G","U" => "H","V" => "I","W" => "J","X" => "K","Y" => "L","Z" => "M");
	$len = strlen($hint);
	for ($i = 0, $j = strlen($hint); $i < $j; $i++) {
		$val = strtoupper($hint[$i]);
		if ($val != " " && $val != "") { 
			//print $val." - ";
			//print "$key[$val] <br />";
			$orig .= "$val";
			$result .= "$key[$val]";
		}
		else {
			//print "<br />";
			$orig .= " ";
			$result .= " ";
		}
	}
	//return array($result,$orig);
	return $result;
}
$message = ($_GET['message']) ?$_GET['message'] : $_POST['message'];
if (!isset($message)) {
	$result = "notComplete";
}
else if ($_GET['captchaSelection'] != $_SESSION['simpleCaptchaAnswer']) {
	$result = "captchaFail";
}
else {
	$return = decodeHint($message);
	$result = "good";
}
//print "$endOutput";
print "$result";
?>
