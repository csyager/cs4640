package bean;
import java.util.Date;
public class TimeBean {
	Date d;
	Date r;

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
}
