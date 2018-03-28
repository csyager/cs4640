
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import java.util.Properties;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

//import mail service libraries
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.mail.PasswordAuthentication;
/**
 * Servlet implementation class Email
 */
@WebServlet("/Email")
public class Email extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor.     
     */
    public Email() {
        // TODO Auto-generated constructor stub
    }

 // This is a bogus email created for this example 
    // To allow any program (e.g., this servlet) to login and send email from a gmail account,
    // please go to the gmail account >> sign-in and security >> turn on the "less security" option. 
 	
    private String username = "leisurekyle45@gmail.com";   // ask me for username and password used for this example
    private String password = "Kleisure45";
 			
    private String from_email = "leisurekyle45@gmail.com";
 	   
    private String str_cofm = "Hello";
 	
    protected void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException 
    {
       res.setContentType ("text/html");
       PrintWriter out = res.getWriter ();  
       String toEmail = req.getParameter("email");
       String subject = "Forgotten Password";
       String passFound = "placeholder"; //this will come from the database
       if(toEmail.contains("@") && toEmail.contains(".")) {
           	send_email(toEmail, subject, passFound);
           	res.sendRedirect("login.html");
       }
       else {
    	   // Alert box displays out.println("<p>" + str_cofm + "</p>"); 
    	   res.sendRedirect("forgot.jsp");
       }
       
       out.close ();	      
    }
    
    protected void doGet(HttpServletRequest req, HttpServletResponse res) 
 		     throws ServletException, IOException 
    {	    	   
       res.setContentType ("text/html");
       PrintWriter out = res.getWriter();
  
       // always a good idea to include title --> telling where we are (in addition to what shows in the body)
       // and also increase usability when the url to this web component is bookmarked
       
       out.print("<p>The plan is to have a jsp run on top of this, which will submit the form using post</p>");
       out.close();
    }
    
    
    private void send_email(String toEmail, String subject, String passFound)
    {
       Properties props = new Properties();
       
       // Specifies the IP address of your default mail server
 	  // for example, if you are using gmail server as an email sever
       // you will pass smtp.gmail.com as value of mail.smtp host. 
       props.put("mail.smtp.auth", "true");
       props.put("mail.smtp.starttls.enable", "true");
       props.put("mail.smtp.host", "smtp.gmail.com");
       props.put("mail.smtp.port", "587");      
       
      // pass properties object and authenticator object
      // for authentication to Session instance

       Session session = Session.getInstance(props, new javax.mail.Authenticator() {
             protected PasswordAuthentication getPasswordAuthentication() {
                return new PasswordAuthentication(username, password);
          }
       });      
             
       if (toEmail.length() > 0)
       {
          try 
          {
             Message message = new MimeMessage(session);
             message.setFrom(new InternetAddress(from_email));     // from which email address
             message.setRecipients(Message.RecipientType.TO, InternetAddress.parse(toEmail));  // send to which email address
             message.setSubject(subject);         // set a subject of an email 
             message.setContent(passFound, "text/html; charset=utf-8");   // set a message of an email 
             
             Transport.send(message);                              
                
             // always provide feedback, so that the users know what happens, what to do next 
             
             str_cofm = "Email notification was sent";    // nothing wrong, confirm to the user so that the user knows the status
             
          } catch (MessagingException e) {
         	// if something's wrong, let the user knows  
             str_cofm = "There is a problem while sending an email. " + 
                        "Please check your code and try sending an email again."; 
             throw new RuntimeException(e);
          }
        }    
                   
    }   
}
