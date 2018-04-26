package bean;
import java.util.Date;
public class TimeBean {
	Date d;
	Date r;
	String username;
	String stars;
	public TimeBean() {
		// TODO Auto-generated constructor stub
		d = new Date();
		
	}
	public Date getDate() {
		return d;
	}
	public void setDate(Date da) {
		d = new Date();
	}
	public Date getResult() {
		return r;
	}
	public void setResult(Date re) {
		r = re;
	}
	public String getUsername() {
		return username;
	}
	public void setUsername(String s) {
		username = s;
	}
	public String getStars(){
		return stars;
	}
	public void setStars(String s){
		stars=s;
	}
}
