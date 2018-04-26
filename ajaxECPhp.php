<?php
// welcomeMsg.php
//  Gets the form data and prints it to screen

// handle get request
// $strSoFar = $_GET["StringSoFar"];
// print "Welcome  <font color='green'> $strSoFar </font>";

// handle post request
$strSoFar = $_POST["StringSoFar"];
if(!is_numeric($strSoFar)){
	print "Price must be a numeric value";
}
else {
	$strSoFar = $strSoFar + 0;
	if($strSoFar < 0){
		print "Price must be positive (or 0)";
	}
}
//$preSoFar = $_POST['PrefixSoFar'];
?>
