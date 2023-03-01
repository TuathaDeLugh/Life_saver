<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/common/profile.css" rel="stylesheet" />
    <link href="../style/common/centerbox.css" rel="stylesheet" />
        <style>
        .changepass{
            font-weight:700;
    color:#F3525A;
        }
    </style>
    
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
    <div class="content">
    <div class="box">
    <div class="heading"><h2><i>Change Password</i></h2></div>
    <table>
<tr>
<td>Old Password</td>
<td>
    <input type="password"  runat="server"  class="design" AutoPostBack="True" >
   </td>
</tr>
<tr>
<td>New Password</td>
<td>
    <input type="password"  runat="server"  class="design" Enabled="False" >
   </td>
    
</tr>
<tr>
<td>Confirm Password</td>
<td>
    <input type="password"  runat="server"   class="design" Enabled="False" >

    </td>
</tr>


<tr><td></td>
    <td>
        <input type="submit" class="btn" runat="server" Text="Update Password" Height="40px" 
        </td>
</tr>
    </table></div>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>