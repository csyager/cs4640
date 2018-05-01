<DOCTYPE html>
<html style="height: 100%">
<head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="ajaxEC.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
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
      .NormButton{
        background-color: #e69138ff;
        cursor: pointer;
        border-radius: 3px;
        border-color: #e69138ff;
      }
      .NormButton:hover{
        /*have not decided what to do here yet*/
        background-color: #ffb833;
        border-color: #ffb833;
      }
      ::-webkit-file-upload-button {
        cursor:pointer;
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
        <a href="CreateListing.php" class="btn">Make Your Own Listing</a>
      </div>
      <div class="col-md-3 col-sm-3" align="right">
        <a href="login.html" class="btn">Select Search Criteria</a>
      </div>
      <div class="col-md-3 col-sm-3" align="right">
        <input type="text" id="searchword" class="searchBar" placeholder="Search By Title">
        <button id="go" style="display: inline-block; cursor: pointer;">Go</button>
        </div>
      </div>
  </nav>
  <nav class=" navbar navbar-default droptop">
      <div class="container-fluid">
        <div class="col-sm-9 col-9">
            <input id="searchWordSmall" class="searchBar" type="text" name="search" placeholder="Search By Title" style="max-width: 75%">
            <button id="goSmall" style="cursor: pointer;">Go</button>
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
              <a href="CreateListing.php" class="btn" style="font-size: 20px;">Make Your Own Listing</a>
              <a href="login.html" class="btn" style="font-size: 20px;">Select Search Criteria</a>
          </div>
        </div>
    </div>

</div>

</nav>
 <!--end navbar-->
<br> 
  <!--php goes here -->
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $emailERR = false;
    $passERR = false;

    if(!isset($_POST['email']) || (strpos($_POST['email'], '<') !== false) || (strpos($_POST['email'], '>') !== false)){
      $emailERR = true;
    }
    elseif (strlen($_POST['email']) != 19 && strlen($_POST['email']) != 18) {
      $emailERR = true;
    }
    if(!isset($_POST['password']) || ! isset($_POST['confirmPassword'])){
      $passERR = true;
    }
    elseif ($_POST['password'] != $_POST['confirmPassword']) {
      $passERR = true;
    }
    $numErr = 0;
    echo "<center><table style='background-color:white; padding-bottom:0px;'>";
    if($emailERR == true){
      $numErr = 1;
      echo "<td style='color:red'>Email not valid</td>";
    }
    if($passERR == true){
      if($numErr == 1){
        echo "<tr><td style='color:red'>Passwords do not match</td></tr>";
      }
      else
        echo "<td style='color:red'>Passwords do not match</td>";
    }
    echo "</table></center>";

    if(!$emailERR && !$passERR){
      //write to xml
      $xml=simplexml_load_file("C:/Users/Kyle Leisure/Desktop/PL Web App/eclip/test/WebContent/WEB-INF/data/Logins.xml") or die("Error: Cannot create object");
      $user = $xml->addChild('user');
      $user->addChild('email', $_POST['email']);
      $user->addChild('password', $_POST['password']);
      $user->addChild('rating', "N/A");

      $xml->asXml("C:/Users/Kyle Leisure/Desktop/PL Web App/eclip/test/WebContent/WEB-INF/data/Logins.xml");

    }
  }
  ?>
  <div ng-app="myApp" ng-controller="myController">
  <center>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <table width="fit">
    <th style="text-align: center; padding-bottom: 0px;">Sign Up</th>
    <tr>
      <td style="font-size: 15px; padding-bottom: 5%;"><a href="unimplemented.html" style="color: white; text-decoration: underline;">How do I fill this out?</a></td>
    </tr>
    <tr>
      <td><input type="text" id="email" name="email" placeholder="Email" style="width: 400px;" required ng-model="email"></td>
    </tr>
    <tr>
      <td><div id="emailInfo" style="color: orange; font-weight: bold;"></div></tr>
    <tr>
      <td><input type="text" id="password" name="password" placeholder="Password" style = "width: 400px;" required ng-model="pass1"></td>
    </tr>
    <tr>
      <td><input type="text" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" style= "width: 400px;" required ng-model="pass2" ng-keyup="confirm()"></td>
    </tr>
    <tr><td><p style="color: white">{{confirmation}}</p></td></tr>
    <tr>
      <td><button type="submit" class="NormButton">Submit</button></td>
    </tr>
</table>
</form>

</center>
</div>
<script> 
   var myApp = angular.module('myApp', []);

      myApp.controller("myController", function ($scope, $http) 
      {
        var onSucess = function(data, status, headers, config){
          $scope.confirmation = data;
        };
        var onError = function(data, status, headers, config){
          $scope.error = status;
        };
        $scope.confirm = function(){
          if($scope.pass1 !== undefined){
            var promise = $http.get("checkPass.php?pass1=" + $scope.pass1 +"&pass2=" + $scope.pass2 + "&email=" + $scope.email);
            promise.success(onSucess);
            promise.error(onError);

          }
          else
            $scope.confirmation = "undefined";
        };  
      });
</script>
<!--info scripts  -->
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

function dispEmail(){
  document.getElementById(emailInfo).innerHTML = "Note:  Must be a valid UVA email address.";
}
function nonDispEmail(){
  document.getElementId(emailInfo).innerHTML = "";
}

  var email = document.getElementById('email');
  email.addEventListener('focus', function()){
    dispEmail();
  }, false);
  
</script>

</body>
</html>