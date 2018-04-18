<%@ page language="java" %>
<%@ page import = "java.util.Date"%>
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
       -webkit-transition: width .4s ease-in-out; /*bootstrap Docs*/
        transition: width .4s ease-in-out;
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
        padding-top: 4%;
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
  
</style>
<div> <!--This is the navbar-->
  <nav class="navbar navbar-default regular">
      <div class="container-fluid" style="border-color: #e69138ff">
      <div class="col-md-1 col-sm-1">
        <img src="sunset.jpg" class="imgNav">
      </div>
      <div class="col-md-2 col-sm-2" align="right">
        <a href="profilePage.jsp" class="btn">My Profile</a>
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
              <a href="profilePage.jsp" class="btn" style="font-size: 20px;">My Profile</a>
              <a href="CreateListing.php" class="btn" style="font-size: 20px;">Make Your Own Listing</a>
              <a href="login.html" class="btn" style="font-size: 20px;">Select Search Criteria</a>
          </div>
        </div>
    </div>

</div>

</nav>
 <!--end navbar-->
<jsp:useBean id="Timer" class="bean.TimeBean" scope="session" />
<%! Date cur = new Date(); %>
<jsp:setProperty name="Timer" property="result" value="<%= new Date() %>"/>
<div id="left" style="float: left; width: 30%; height: 100%">
	<br>
	<table style="height: 90%">
		<tr>
		<td style="width: 5%;"></td>
		<td style="width: 100%; background-color: grey; height: 100%">
		<iframe src="https://uvabookstores.com/uvatext/default.asp?" style="height: 100%; width:100%;">
  <p>Your browser does not support iframes.</p>
</iframe>
		</td>
		<td style="width: 0%"></td>
		</tr>
	</table>
</div>
<div id="right" style="float: right; width: 70%; height: 100%">
<br>
	<table style="height: 90%; width: 100%">
		<!--top border-->
		<tr style="height: 10px"> 
		<td style="width: 10px"></td>
		<td colspan="5" style="background-color: rgba(7, 55, 99, .65)"></td>
		<td style="width: 10px"></td>
		</tr>
	<!-- To be put into jsp for loop -->
	
		
		<%! int count = 4; //This number would come from the database%>
	<%!
		String[] titlesArr = new String[count];
		String[] conditionArr = new String[count];
		String[] priceArr = new String[count];
    String[] typeArr = new String[count]; //These should all line up by index 
		//fill from database, we will hardcode for now
	%>
	<%
    for(int i = 0; i<count; i++){
      titlesArr[i] = "Introduction to Python 3rd Edition";
    }
    priceArr[0] = "$399.99";
    priceArr[1] = "$99.99";
    priceArr[2] = "$9.99";
    priceArr[3] = "$10.99"; //A picture array needs to be added as well
    typeArr[0] = "Hardcover";
    typeArr[1] = "Paperback";
    typeArr[2] = "Hardcover";
    typeArr[3] = "Looseleaf";
    conditionArr[0] = "Good";
    conditionArr[1] = "Poor";
    conditionArr[2] = "Good";
    conditionArr[3] = "Okay";
  %>
  <% //for loop
    for(int c = 0; c < count; c++){
  %>
		<!--listing 1-->
		<tr>
		<td style="width: 10px"></td>
		<td style="width: 10px; background-color: rgba(7, 55, 99, .65)"></td>
		<!--Image column-->
		<td style="background-color: orange; width: 60px">
			<img src="textbook.jpg" height="100px" width="60px">
		</td>
		<!--Title and type-->
		<td style="background-color: orange">
			<a href="unimplemented.html"><%= titlesArr[c]%></a>
			<p><%= typeArr[c]%></p>
		</td>
		<!--Price and condition-->
		<td style="background-color: orange">
			<b><%= priceArr[c]%></b>
			<p>Condition: <%=conditionArr[c]%></p>
		<td style="width: 10px; background-color: rgba(7, 55, 99, .65)"></td>
		<td style="width: 10px"></td>
		</tr>

		<!--separator-->
		<tr style="height: 10px"> 
		<td style="width: 10px"></td>
		<td colspan="5" style="background-color: rgba(7, 55, 99, .65)"></td>
		<td style="width: 10px"></td>
		</tr>
    <%
      } //end of the for loop
    %>
		
		<!--bottom border-->
		<tr style="height: 10px">
		<td style="width: 10px"></td>
		<td colspan="5" style="background-color: rgba(7, 55, 99, .65)"></td>
		<td style="width: 10px"></td>
		</tr>

</table>

</div>
<br/>
<footer style="width: 100%; bottom: 0; color: white;">
 Results as of: <jsp:getProperty name="Timer" property="result"/>. <p>Logged in at: <jsp:getProperty name="Timer" property="date"/>
</p></footer>
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
      window.open("booklistings.jsp", "_self");
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
      window.open("booklistings.jsp", "_self");
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


</script>
</html>