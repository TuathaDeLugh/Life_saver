<html>

<head>
	<title>Life Saver Login</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="files/logo.png" type="image/x-icon" />
	<script type="text/javascript" src="js/sweet.js"></script>
	<script type="text/javascript" src="js/toast.js"></script>
	<link href="js/toast.css" rel="stylesheet" />
	<link href="style/common/togglebutton.css" rel="stylesheet" />
</head>

<body>

		<script>
			NolertNotify.setConfig({position: ('bottom-right'), closeIn: 5000});
		</script>

		
		<?php

	if (isset($_COOKIE['alert'])) {
		?>
		<script>swal('<?php echo $_COOKIE['alert']; ?>', '', 'error')</script>
		<?php
	}
	if (isset($_COOKIE['session'])) {
		?>
		<script>swal('Access Denied','<?php echo $_COOKIE['session']; ?>','error')</script>
		<?php
	}
	if (isset($_COOKIE['noc'])) {
		?>
		<script>NolertNotify.trigger({type: 'danger',iconType: 'warning',message: 'Autofill Data Not Found'});</script>
		<?php
	}
	?>
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
			<form id="login" autocomplete="off" action="context/main.php" method="post">
				<h2>Sign in</h2>
				<div class="autofill" style="margin-bottom:1rem;">
					<a href="./context/main.php?autofill=autofill" ID="autofill" name="autofill">auto fill & login</a>
				</div>
				<div class="inputBox">
					<span>User ID</span>
					<input type="text" ID="ID" name="userid"></input>
				</div>
				<div class="inputBox">
					<span>Password</span>
					<input type="password" ID="PASS" name="password"></input>

				</div>
				<div class="links" style="margin-top:1rem;">
					<label class="switch">
						<input type="CheckBox" ID="Rememberme" name="remember" />
						<span class="slider round"></span>
					</label>
					Remember me
					<a href="#">Forgot Password</a>
				</div>

				<input type="submit" ID="Button1" name="login" value="Login" />

			</form>

		</div>
	</div>
	<div class="footer">*This login page is only for Blood Bank. Normal user please refure android app</div>
</body>

</html>