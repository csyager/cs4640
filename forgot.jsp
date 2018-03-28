<!DOCTYPE html>
<html>
<head>
	<title>forgot</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="logCSS.css">
<style type="text/css">
	th{
		font-size: 4.0vw;
		color: white;
	}
	td{
		font-size: 20px;
		color: white;
	}
</style>
</head>
<body>

<center>
	<h1></h1> <!-- trying to stay as similar as possible to login-->
<table><th style="text-align: center;">Forgotten Password?</th> <tr>
	<td style="padding-left: 5%; padding-right: 5%; text-align: center;">Put your email in the blank below and click the button to have a new one sent to you.</td>
	</tr>
	<tr> <!-- the email and submit are on rows of the table-->
		<td style="text-align: center; padding-top: 8%;">
	<form method="post" action="http://localhost:8080/Email/Email">
		<input type="text" id=email name="email" placeholder="Email">
		</td>
	</tr>
	<tr><td style="text-align: center;  padding-bottom: 3%;">
		<button id="send" name="send" type="submit" style="font-size: 18px;">Send</button></td></tr>
	</form>
</table>
</center>
</body>
<script type="text/javascript">
	//email = id email
	//button = id send
	//again, a lot of placeholders, need backend
	function validateEmail(){
		var toValidate = document.getElementById('email');
		if(toValidate.value.length != 19 && toValidate.value.length != 18){
			return false;
		}
		else if(false /*email isn't in system, to be changed*/){

		}
		else{
			return true;
		}
	}
	var press = document.getElementById('send');
	press.addEventListener('click', function(){
		if(validateEmail()){
			alert("Attempting to Send, reloading the login page.");
			//window.open("login.html", "_self");
		}
		else{
			alert("Enter a valid email.");
			//window.open("forgot.jsp", "_self");
		}
	}, false);
</script>
</html>