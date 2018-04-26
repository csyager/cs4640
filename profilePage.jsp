<%@ page language="java" %>
<%@ page import = "java.util.Date"%>
<%@ page import= "bean.TimeBean" %>
<%@ page import="javax.xml.parsers.DocumentBuilderFactory"%>
<%@ page import="javax.xml.parsers.DocumentBuilder"%>
<%@ page import="org.w3c.dom.Document"%>
<%@ page import="org.w3c.dom.NodeList"%>
<%@ page import="org.w3c.dom.Node"%>
<%@ page import="org.w3c.dom.Element"%>
<%@ page import="java.util.Date"%>
<%@ page import ="java.io.File"%>
<%@ page import="java.util.ArrayList" %>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
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
       -webkit-transition: width .4s ease-in-out;  /*bootstrap Docs*/
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
  <!-- We need to put a 'manage listings' button undecided of where it will go, so it is not included-->
    <jsp:useBean id="Timer" class="bean.TimeBean" scope="session"/>
  <jsp:setProperty name="Timer" property="username" value="${sessionScope.userName}"/>
  <jsp:setProperty name="Timer" property="stars" value="${sessionScope.stars}"/>
  <%! ArrayList<String> xTitles = new ArrayList<String>();
    ArrayList<String> xTypes = new ArrayList<String>();
    ArrayList<String> xPrices = new ArrayList<String>();
    ArrayList<String> xConditions = new ArrayList<String>();
     ArrayList<String> xImgs = new ArrayList<String>(); //indicies here should all match
      ArrayList<String> xPrefixes = new ArrayList<String>();
       ArrayList<String> xNumbers = new ArrayList<String>();
        ArrayList<String> xPosters = new ArrayList<String>();
        int sizeData = 0;
        int listCounter = 0;%> 
         <%! //String datafile = "test/WebContent/WEB-INF/data/books.xml"; 
  private Document create_DOM_from_file(String fname) throws Exception 
   {
      try {
         File datafile = new File(fname);
         DocumentBuilderFactory dbfactory = DocumentBuilderFactory.newInstance();
         DocumentBuilder dbuilder = dbfactory.newDocumentBuilder();
         Document doc = dbuilder.parse(datafile);
         return doc;
      } catch (Exception e) {
         e.printStackTrace();
      }
      return null;
   } %>
   <%
   try{
   Document doc = create_DOM_from_file("C:/Users/Kyle Leisure/Desktop/PL Web App/eclip/test/WebContent/WEB-INF/data/Books.xml"); //this would have to be changed
   NodeList nList = doc.getElementsByTagName("text"); 
     sizeData = nList.getLength();
     listCounter = 0;
   for(int i = 0; i < nList.getLength(); i++){
      Node nd = nList.item(i);
      if(nd.getNodeType() == Node.ELEMENT_NODE){
        Element ele = (Element)nd;
          if(ele.getElementsByTagName("poster").item(0).getTextContent().equals(Timer.getUsername())){
          listCounter += 1;
        }
          xTitles.add(ele.getElementsByTagName("title").item(0).getTextContent());
          xPrices.add(ele.getElementsByTagName("price").item(0).getTextContent());
          xTypes.add(ele.getElementsByTagName("type").item(0).getTextContent());
          xConditions.add(ele.getElementsByTagName("condition").item(0).getTextContent());
          xImgs.add(ele.getElementsByTagName("img").item(0).getTextContent());
          xPrefixes.add(ele.getElementsByTagName("prefix").item(0).getTextContent());
          xNumbers.add(ele.getElementsByTagName("number").item(0).getTextContent());
          xPosters.add(ele.getElementsByTagName("poster").item(0).getTextContent());
      
    }
   }

 } catch (Exception e) {
         e.printStackTrace();
    }
 %>

  <div style="height: 100%;">
  <h1 style="padding-left: 35px; padding-bottom: 0px;">My Profile</h1>

<div id="left" style="float: left; width: 35%; height: 100%;">
<img src="profilepic.png" height="30%" width ="100%" style="padding: 30px">
<br>
<br>
<table style="width: 90%; background-color: orange; margin-left: 30px">
<!--top padding-->
<tr><td></td></tr>
<tr>
<td><jsp:getProperty name="Timer" property="username"/></td>
</tr>
<tr>
<td>Average Rating:</td>
<td><jsp:getProperty name="Timer" property="stars"/> Stars</td>
</tr>
<tr>
<td>Number of Listings:</td>
<td><%=listCounter%> Listings</td>
<!--bottom padding-->
<tr><td><br></td></tr>
</table>
<h2 style="padding: 5%;"></h2>

</div>


<div id="right" style="float:right; width: 65%; height: 100%; padding-left: 100px">
<br>
<table style="width: 80%; background-color: rgba(7, 55, 99, .65); margin-left: 30px; border-radius: 10px;">
<tr>
<th colspan="3" style="text-align: center; color: white; font-family: verdana;">Your Listings</th>
</tr>
<!--line break-->

<tr><td><br></td></tr>
<% for(int i = 0; i<sizeData; i++){
    if(xPosters.get(i).equals(Timer.getUsername())){ %>
<!--listing 1-->
<tr style="outline: thin solid; background-color: orange; ">
<td><img src="textbook.jpg" height="100px" width="60px"></td>
<td>
<a href="unimplemented.html"><%= xTitles.get(i)%></a>
      <p><%= xTypes.get(i)%></p>
<br>
</td>
<td><b>$<%= xPrices.get(i) %></b>
        <p>Condition: <%= xConditions.get(i)%></p>
</td>
</tr>
<!--padding between listings-->
<tr><td><br></td></tr>
<% } }%>


</table>

</div>
</div>
<div style="bottom: 0%; color:white; float: left; width: 100%"> Logged in at: <jsp:getProperty name = "Timer" property="date"/></div>
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
