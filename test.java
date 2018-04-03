

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class test
 */
@WebServlet("/test")
public class test extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public test() {
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		PrintWriter out = response.getWriter();
		response.setContentType ("text/html");
		HttpSession session = request.getSession(false);
		if(session == null) {
			out.println("<head>\r\n" + 
					"  <title>Login</title>\r\n" + 
					"  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">\r\n" + 
					"  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>\r\n" + 
					"<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>\r\n" + 
					"<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>\r\n" + 
					"<link rel=\"stylesheet\" type=\"text/css\" href=\"logCSS.css\"> <!--This is the login type page style sheet-->\r\n" + 
					"</head>\r\n" + 
					"  \r\n" + 
					"  <body class=\"img-fluid\">\r\n" + 
					"    <center>\r\n" + 
					"    <h1></h1> <!---Just a place holder so the table isn't on the top-->\r\n" + 
					"    </center>\r\n" + 
					"    <form method=\"post\" action=\"http://localhost:8080/test/test\">\r\n" + 
					"        <center>\r\n" + 
					"      <table>   <!--Formatting the two options, the login page is a table-->\r\n" + 
					"        <th colspan=\"2\" class=\"tabForm\">UnnamedWebsite.com</th>\r\n" + 
					"       <!--POSSIBLY NOT NEEDED IF THE NAME OF THE SITE IS GOOD--> <tr> <td colspan=\"2\" style=\"text-align: center; padding-bottom: 2%; padding-top: 0; color: white; font-size: 18px\">The quick and easy way to buy and sell textbooks with peers</td> </tr>\r\n" + 
					"        <tr>\r\n" + 
					"          <td class=\"tabForm\">Already Have an Account?</td>       \r\n" + 
					"          <td class=\"tabForm\">Join Now!</td>\r\n" + 
					"       </tr>\r\n" + 
					"        <tr>\r\n" + 
					"          <td class=\"tabForm\"><br><input type=\"text\" id=\"user\" name=\"user\" placeholder=\"Email\" tabindex=\"1\"/></td>  \r\n" + 
					"          <td rowspan=\"2\" class=\"tabForm\"> <button id=\"create\">Create Account</button></td>\r\n" + 
					"        </tr>\r\n" + 
					"        <tr>  \r\n" + 
					"          <td class=\"tabForm\"><input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"Password\" tabindex=\"2\"> </td>\r\n" + 
					"\r\n" + 
					"        <tr>\r\n" + 
					"          <td class=\"tabForm\"><button id=\"log\" type=\"submit\">Log in</button></td>\r\n" + 
					"        </tr>\r\n" + 
					"        <tr>\r\n" + 
					"\r\n" + 
					"         <td class=\"tabForm\"> <a href=\"forgot.jsp\" title=\"Forgot\">Forgot my Password</a></td>  \r\n" + 
					"        </tr>\r\n" + 
					"      </table>\r\n" + 
					"    </center>\r\n" + 
					"      </form>\r\n" + 
					"\r\n" + 
					"  </body>\r\n" + 
					"  <script type=\"text/javascript\"> //most of the functions here are just framework, we need to have a backend to maintain a lot of things\r\n" + 
					"    //not to be used yet\r\n" + 
					"    var pass = document.getElementById('pass');\r\n" + 
					"\r\n" + 
					"    function createAcct(){\r\n" + 
					"      alert(\"can't do anything yet (not implemented)\")\r\n" + 
					"    }\r\n" + 
					"\r\n" + 
					"    //these would be similar to what happens when the log in button is pressed.\r\n" + 
					"    function checkUser(){\r\n" + 
					"      var user = document.getElementById('user');\r\n" + 
					"      if(user.value.length != 19 && user.value.length != 18){\r\n" + 
					"        return false;\r\n" + 
					"      }\r\n" + 
					"      else{\r\n" + 
					"        return true;\r\n" + 
					"      }\r\n" + 
					"    }\r\n" + 
					"    function logPress(){\r\n" + 
					"      if(checkUser() == true)\r\n" + 
					"        //alert(\"No accounts made yet, no back end\");\r\n" + 
					"      else\r\n" + 
					"        alert(\"username not valid, it needs to be a UVA Email\");\r\n" + 
					"      	Window.open(\"login.html\", \"_self\");\r\n" + 
					"    }\r\n" + 
					"   // var log = document.getElementById('log');\r\n" + 
					"  //  log.addEventListener('click', function(){\r\n" + 
					"     // logPress(); }, false);  \r\n" + 
					"  //  var create = document.getElementById('create');\r\n" + 
					"  //  create.addEventListener('click', function(){\r\n" + 
					"     // createAcct();\r\n" + 
					"   // }, false);\r\n" + 
					"\r\n" + 
					"  </script>");
		}
		else {
			response.sendRedirect("profilePage.html");
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		PrintWriter out = response.getWriter();
		response.setContentType("text/html");
		String user = request.getParameter("user");
		String pass = request.getParameter("pass");

		if(user == "" || pass == "") {//to be changed
			response.sendRedirect("http://localhost:8080/test/test");
		}
		else {
			HttpSession ses = request.getSession(true);
			response.sendRedirect("profilePage.html");
		}

	}

}
