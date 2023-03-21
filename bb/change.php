<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/common/profile.css" rel="stylesheet" />
    <link href="../style/common/centerbox.css" rel="stylesheet" />
    <script type="text/javascript" src="../js/sweet.js"></script>
        <style>
        .changepass{
            font-weight:700;
    color:#F3525A;
        }
    </style>
    
</head>
<body>
    <?php include('header.php');

	if (isset($_COOKIE['alert'])) {
		?>
		<script>swal('<?php echo $_COOKIE['alert']; ?>', '', 'error')</script>
		<?php
	}
    if (isset($_COOKIE['success'])) {
		?>
		<script>swal('<?php echo $_COOKIE['success']; ?>', '', 'success')</script>
		<?php
	}
	?>
    <main id="main">
    <div class="content">
    <div class="box">
    <div class="heading"><h2><i>Change Password</i></h2></div>
    <form action="../context/changepass.php" method="post">
    <table>
<tr>
<td>Old Password</td>
<td>
    <input type="password"  name="oldpass"  class="design" required>
   </td>
</tr>
<tr>
<td>New Password</td>
<td>
    <input type="password" name="newpass" class="design" required>
   </td>
    
</tr>
<tr>
<td>Confirm Password</td>
<td>
    <input type="password"  name="conpass"   class="design" required>

    </td>
</tr>


<tr><td></td>
    <td>
        <input type="submit" class="btn" name="updatepass" value="updatepass" Text="Update Password" Height="40px"> 
        </td>
</tr>
    </table>
    </form></div>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>