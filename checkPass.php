<?php


$pass1 = $_GET["pass1"];
$pass2 = $_GET["pass2"];
if ($pass1 == $pass2){
	print " Passwords match";
}
else{
	print " Password do not match";
}

?>