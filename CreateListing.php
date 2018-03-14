<!DOCTYPE html>
<html style="height: 100%">
<head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="height: 100%">
<style type="text/css">  /*Will probably put this into a CSS file. 
/*source https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_menu_icon_js */
.container {
    display: inline-block;
    cursor: pointer;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}
/*end source*/
		 body{
        background: linear-gradient(
        rgba(0, 0, 0, 0.3), 
        rgba(0, 0, 0, 0.3)
        ),url("normal.jpg");
        background-position: center center;
        background-repeat: no-repeat; 
        background-attachment: fixed;
        background-size: cover;
	}

	.navbar{
		padding-bottom: 1%;
		padding-top: 1%;
	}
	.btn{
		font-size: 2.0vw;
    background-color: #e69138ff;
    
	}
  .btn: hover{
    background-color: orange;
  }
	.imgNav{
		display: inline-block;
		position: left;
		max-width: 100%;
		height: auto;	
		width: auto;
	}
 	a:link {
    color: black;
    text-align: center;
    }
      /* visited link */
      a:visited {
          color: black;
      }
      /* mouse over link */
      a:hover {
          background-color: orange;
      }
      /* selected link */
      a:active {
          color: #e69138ff;
          box-shadow: none;
      }
      .searchBar{
        width: 75%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 100%;
        background-color: white;
        background-image: url('searchicon.png');
        background-size: 25px;
        background-position: 5px 12px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
       -webkit-transition: width .4s ease-in-out;
        transition: width .4s ease-in-out;
    } 
table{
        padding-top: 2%;
        padding-bottom: 2%;
        border-radius: 10px;
        float: center;
        background-color: rgba(7, 55, 99, .65);
      }
            td{
        font-size: 20px;
        padding-bottom: 10px;
        text-align: center;
      }
      th{
        font-size: 3.3VW;
        color: white;
      }
      .tabForm{
        color: white;
        font-family: "verdana";
        width: 20%;
        text-align: center;
        float: center;
      }
      h1{ /*MAYBE*/
        font-family: "verdana";
        color: white;
        padding-top: 2%;
        font-size: 4.0vw;
        padding-bottom: 1.75%
      }
      .droptop{
        /*css way to get navbar to turn into dropdown*/
      }
      .regular{
        /*css way to get navbar to turn into dropdown*/
      }
    @media only screen and (min-width: 850px) {
    .droptop {
        display: none;
    }
   }
      @media only screen and (max-width: 851px) {
    .regular{
        display: none;
    }
   }
    nav{
    background-color: #e69138ff;
    }
    .dropButton{
      background-image: url(NavIcon.png);
    }
          button{
        background-color: #e69138ff;
        cursor: pointer;
        border-radius: 3px;
        border-color: #e69138ff;
      }
      button:hover{
        /*have not decided what to do here yet*/
        background-color: #ffb833;
        border-color: #ffb833;
      }
      .navButton{
        background-color: #D3D3D3;
        border-color: #D3D3D3;
      }
</style>
<div> <!--This is the navbar-->
	<nav class="navbar navbar-default regular">
    	<div class="container-fluid" style="border-color: #e69138ff">
    	<div class="col-md-1 col-sm-1">
    		<img src="sunset.jpg" class="imgNav">
    	</div>
      <div class="col-md-2 col-sm-2" align="right">
      	<a href="profilePage.html" class="btn">My Profile</a>
      </div>
      <div class="col-md-3 col-sm-3" align="right">
      	<a href="login.html" class="btn">Make Your Own Listing</a>
      </div>
      <div class="col-md-3 col-sm-3" align="right">
      	<a href="login.html" class="btn">Select Search Criteria</a>
      </div>
      <div class="col-md-3 col-sm-3" align="right">
      	<input type="text" class= "searchBar" id="searchword" placeholder="Search For Listings">
        <button id="go" style="display: inline-block;" class="navButton">Go</button>
        </div>
      </div>
  </nav>
  <nav class=" navbar navbar-default droptop">
      <div class="container-fluid">
        <div class="col-sm-9 col-9">
            <input id="searchWordSmall" class="searchBar" type="text" name="search" placeholder="Search for Listings" style="max-width: 75%">
            <button id="goSmall" class="navButton">Go</button>
        </div>
<!--<a href="login.html" class="btn col-sm-3 col-3" data-toggle="collapse" data-target="#dropper" style="font-size: 3.3vw; ">Options</a> -->
  <div class="container btn col-sm-2 col-2" data-toggle="collapse" data-target="#dropper" onclick="makeX(this)" style="float: right;">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
  <div id="dropper" class="collapse">
    <div style="">
        <a href="profilePage.html" class="btn" style="font-size: 20px;">My Profile</a>
        <a href="login.html" class="btn" style="font-size: 20px;">Make Your Own Listing</a>
        <a href="login.html" class="btn" style="font-size: 20px;">Select Search Criteria</a>
    </div>
  </div>
        </div>

      </div>
    </div>

  </nav>

</div> <!--end navbar-->
<h1></h1>



<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //echo "<center><table style='background-color:white; padding-bottom:0px;'><td style='color:red'>YOURalkd;jgldsjg;lads;aj;ldsfj;dsaljfsa;ldfj;dsalfjdsa;lfjdsa;lfdsajf;ldsajf;lsadjf;ljsaf</td></table></center>";

    $fileTypes = ['image/jpg', 'image/png', 'image/jpeg'];
    $courseERR = false;
    $numERR = false;
    $titleERR = false;
    $imgERR = false;
   


    //helpers
    //checking valid course prefix
  function checkValidPre($prefix){ 
    $preCaps = strtoupper($prefix);
    return true;
    //this will be validating the prefix with ones stored on the server, hardcoding these in
  }
  //checking valid course number, helper
  function checkValidNum($num){
    if($num == 0 || $num =="'0'"){
      return true;
    }
    if(ctype_digit((string)$num)){
      if($num > 999 && $num < 10000){
        return true;
      }
      else{
        return false;
      }
    }
    else{
      return false;
    }
  }

  //prefix
  if(!isset($_POST['prefix'])){
    $courseERR = true;
  }
  elseif(!checkValidPre($_POST['prefix'])){   
       $courseERR = true;
  }

  //course number
  if(!isset($_POST['number'])){
    $numERR = true;
  }
  else{
    $num = $_POST['number'];
    if(!checkValidNum($num)){
      $numERR = true;
  }
}
  //title
  if(!isset($_POST['title']) || (strpos($_POST['title'], '<') !== false) || (strpos($_POST['title'], '>') !== false)){ //guard script injection, title should be entered, double checking. 0 == false
    $titleERR = true;
  }
  
  //image stuff
  
  $size=$_FILES['imageIn']['size']; //this will be zero if no file at all was uploaded
    // var_dump($size);
  if($size == 0){
    $imgERR = true; //no file uploaded
  }
  else{
     $pic=getimagesize($_FILES['imageIn']['tmp_name']); 
     $ext = $pic['mime'];
     //check for extension
     //var_dump($ext);
     if(!in_array($ext, $fileTypes)){
      $imgERR = true;
    }
  }

//error checking done, now either send to server or display error messages
  if(!$imgERR && !$numERR && !$titleERR && !$courseERR){
    //send data to server
    echo "Send to the Server";
  } //errors were there
  else{
    $numberERRS = 0;
    echo "<center><table style='background-color:white; padding-bottom:0px;'>";
    if ($imgERR) {
        if($numberERRS == 0){
          $numberERRS = 1;
          echo "<td style='color:red'>File must be an image</td>";
        }
        else{
          echo "<tr><td style='color:red'>File must be an image</td></tr>";
        }

      }
    if ($courseERR) {
       if($numberERRS == 0){
          $numberERRS = 1;
          echo "<td style='color:red'>Course prefix was not valid</td>";
      }
        else{
          echo "<tr><td style='color:red'>Course prefix was not valid</td></tr>";
       }

      }
    if ($numERR) {
        if($numberERRS == 0){
          $numberERRS = 1;
          echo "<td style='color:red'>Course number was not valid</td>";
        }
        else{
          echo "<tr><td style='color:red'>Course number was not valid</td></tr>";
        }

    }
    if($titleERR)
         if($numberERRS == 0){
          echo "<td style='color:red'>Title contained invalid characters</td>";
        }
        else{
          echo "<tr><td style='color:red'>Title contained invalid characters</td></tr>";
        }

    }
    echo "</table></center>";
}

?>



<center>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <table width="fit">
    <th style="text-align: center; padding-bottom: 0px;">Create a Listing</th>
    <tr>
      <td style="font-size: 15px; padding-bottom: 5%;"><a href="unimplemented.html" style="color: white; text-decoration: underline;">How do I fill this out?</a></td>
    </tr>
    <tr>
      <td><input type="text" id="title" name="title" placeholder="Book Title" style="width: 400px;" required></td>
    </tr>
    <tr>
      <td><div id="titleInfo" style="color: orange; font-weight: bold;"></div></tr>
    <tr>
      <td><input type="text" name="prefix" placeholder="Course Prefix (ex. COMM)" id="prefix" style="width: fit;" required> <input type="text" name="number" id="number" placeholder="Course Number (ex. 2010)" required></td>
    </tr>
    <tr>
      <td>
        <div id="courseInfo" style="color: orange; font-weight: bold;"></div><div id="numInfo" style="color: orange; font-weight: bold;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <select  id="type" name="type" required>
        <option selected disabled>Select Book Type</option>
        <option>Hardcover</option>
        <option>Paperback</option>
        <option>Looseleaf</option>
      </select>
      </td>
    </tr>
    <tr>
    <td>
      <select id="condition" name="condition" required>
        <option selected disabled>Select a Book Condition</option>
        <option>Like New</option>
        <option>Good (May have small amount of writing/highlighting)</option>
        <option>Okay (contains decent amount of writing/highlighting)</option>
        <option>Poor (May have lots of markings/water damage/torn pages)</option>
      </select>
    </td>
    </tr>
    <tr>
      <td style="color:white; text-align: right;">Upload an Image--><input type="file" name="imageIn" id="img"></td>
    </tr>
    <tr>
      <td><button type="submit">Submit</button></td>
    </tr>
</table>
</form>
</center>
</body>
<script type="text/javascript">
  //source https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_menu_icon_js
  function makeX(x) {
    x.classList.toggle("change");
}
//end source
//downside of resizing is that two different search bars must be maintained
  function searchBig(){
    var term = document.getElementById('searchword');
    ///Placeholder, we have nothing to search currently, just for demo
    if(searchword.value == "python"){
      window.open("booklistings.html", "_self");
    }
    else{
    alert("The tag you searhed for was not Found");
  }
  }
  var sub = document.getElementById('go');
  sub.addEventListener('click', function(){
      searchBig();
    }, false);
    function searchSmall(){
    var term = document.getElementById('searchWordSmall');
    ///Placeholder, we have nothing to search currently, this is just for demo
        if(searchWordSmall.value == "python"){
      window.open("booklistings.html", "_self");
    }
    else{
    alert("The tag you searhed for was not Found");
  }
  }
  var sub = document.getElementById('goSmall');
  sub.addEventListener('click', function(){
      searchSmall();
    }, false);
//end search bar stuff
/*try to disable the course number until the user has put a value into the prefix*/
/*  function checkPre(){ 
    var pre = document.getElementById('prefix');
    var preVal = pre.value;
    if(preVal == "")
      return false;
    else
      return true;
  }
*/
  //info and errors
  function dispTitle(){
    document.getElementById('titleInfo').innerHTML = "Note: title may not include '<' or '>'";
  }
    function NondispTitle(){
    document.getElementById('titleInfo').innerHTML = "";
  }
  function dispCoursePre(){
    document.getElementById('courseInfo').innerHTML = "Note: must be a UVA course prefix";
  }
    function NondispCoursePre(){
    document.getElementById('courseInfo').innerHTML = "";
  }
  function dispNum(){
    document.getElementById('numInfo').innerHTML = "Note: must be 4 digits. Enter '0' to not include.";
  }
    function NondispNum(){
    document.getElementById('numInfo').innerHTML = "";
  }

  //event listeners
  //Title id = title, prefix = prefix, number = number
  var title = document.getElementById('title');
  var prefix = document.getElementById('prefix');
  var number = document.getElementById('number');

  title.addEventListener('focus', function(){
    dispTitle();
    NondispNum();
    NondispCoursePre();
  }, false);
  /*title.addEventListener('blur', function(){
    NondispTitle();
  }, false);*/
  prefix.addEventListener('focus', function(){
    dispCoursePre();
    NondispTitle();
    NondispNum();
  }, false);
  /*prefix.addEventListener('blur', function(){
    NondispCoursePre();
  }, false);*/
  number.addEventListener('focus', function(){
    dispNum();
    NondispTitle();
    NondispCoursePre();
  }, false);
 /* number.addEventListener('blur', function(){
    NondispNum();
  }, false);*/
</script>

</html>