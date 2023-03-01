
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="style/accrecov.css" rel="stylesheet" />
	<title>Life Saver Login</title>
    <link rel="icon" href="files/logo.png" type="image/x-icon"/>
    <script src="js/sweet.js"></script>
</head>
<body>
	  <div class="header">
		<ul>
			<li><a href="index.html">Life Saver</a></li>
		</ul>

	  </div>
	  <div class="design">
	  <div class="squre" style="--i:0;"></div>
	  <div class="squre" style="--i:1;"></div>
	  <div class="squre" style="--i:2;"></div>
	  <div class="squre" style="--i:3;"></div>
	  <div class="squre" style="--i:4;"></div>
	<div class="box">
		<form id="form1" >
			<h2>Reset Password</h2>
			<div class="inputBox">
            <span>Email</span>
				<input type="text" ID="TextBox1"  AutoPostBack="True"></input>
				
				<i></i>
			</div>
			<div class="inputBox">
            <span><asp:Label ID="Label1"  Text="Label">Question</asp:Label></span>
				<input type="text" ID="TextBox2"  Enabled="False" ></input>
              </div>  
	                <input type="submit" ID="Button1"  value="Check" />
           <div class="inputBox">
            <span><asp:Label ID="Label2"  Text="Label" >Enter  New Password</asp:Label></span>
				<input type="text" ID="TextBox3"  Enabled="False"  ></input>
              </div>
              <div class="inputBox">
            <span><asp:Label ID="Label3"  Text="Label" >Re-enter New Password</asp:Label></span>
				<input type="text" ID="TextBox4"  Enabled="False"></input>
              </div>
              
			<input type="submit" ID="Button2"  value="Reset Password" />
		</form>
		
	</div>
	</div>
	<div class="footer">*This reset password page is only for Blood Bank. Normal user please refure android app</div>
</body>
</html>
