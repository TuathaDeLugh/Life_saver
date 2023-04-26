<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<style>.profile {
    font-weight: 700;
    color: #F3525A;
}</style>
 <link href="../style/common/profile.css" rel="stylesheet" type="text/css" />   
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
    <center>
        <div class="block">
        <div class="heading"><h2><i><asp:Label   Text="Label"></asp:Label> Profile</i></h2></div>
    <table>
    <tr><td><a href="change.php" >Change Password</a></td></tr>
<tr>
<td>Username</td>
<td>
    <input type="text" id="username" name="username"   disabled required >
   </td>
</tr>
<tr>
<td>Name</td>
<td>
    <input type="text" id="name" name="name"   disabled required>
    </td>
</tr>
<tr>
<td>Image</td>
<td>
    <input type="text" id="image" name="image"   disabled required>
    </td>
</tr>
<tr>
<td>Email</td>
<td>
    <input type="text" id="email" name="email"   disabled required>
    </td>
</tr>
<tr>
<td>address</td>
<td>
    <textarea id="address" name="address" rows="5" disabled required></textarea>

    </td>
</tr>
<tr>
<td>Pin code</td>
<td>
    <input type="text" id="pin" name="pin"   disabled required>
</td>
</tr>
<tr>
<td>Contact no</td>
<td>
    <input type="text" id="mono" name="mono"  disabled required>
 
                 
              </td>
</tr>
<tr>
<td>Security Question</td>
<td>
    <input type="text" id="question" name="question"  disabled required>

    </td>
</tr>
<tr>
<td>Security Answer</td>
<td>
    <input type="text" id="answer" name="answer"   disabled required>

    </td>
</tr>
<tr>
<td>Active time</td>
<td>
    <input type="text" id="time" name="time"   disabled required>

    </td>
</tr>
<tr><td><center><button id="update" class="btn btn-primary" value="update">Update</button></center></td>
<td><center><button id="save" class="btn btn-primary" value="submit">submit</button></center></td>
    </tr>
    </table></div></center>
        </div>
    </main>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase.js"></script>
    <script src="../context/firebaseconfig.js"></script>
    <?php 
    include("../context/duprofile.php");
    include('footer.php');?>

</body>
</html>