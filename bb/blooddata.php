<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/Bloodbank/bbblooddata.css" rel="stylesheet" type="text/css" />
    <link href="../style/common/model.css" rel="stylesheet" type="text/css" />
    <script defer src="../js/model.js"></script>
    <link href="../js/toast.css" rel="stylesheet" />
    <script src="../js/toast.js"></script> 
    <script>
        NolertNotify.setConfig({position: ('bottom-right'), closeIn: 5000});
        </script>
    
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
    <center>    
    <div class="block">
    <div class="heading"><center><h2><i><asp:Label ID="Label1"  Text="Label"></asp:Label> Blood Data</i></h2></center></div>
    <form action="../context/bbbdata.php" method="post">
    <table>
<tr>
<th colspan="2">O</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>O+</span>
				<input type="number" name="opve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>O-</span>
				<input type="number" name="onve"  ></td></div>            
 </tr>
 <tr>
<th colspan="2">A</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>A+</span>
				<input type="number" name="apve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>A-</span>
				<input type="number" name="anve"  ></asp:TextBox ></td>
                </div>
 </tr>
 <tr>
<th colspan="2">B</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>B+</span>
				<input type="number" name="bpve"  ></div>
    </td>
    <td>
        <div class="inputBox">
            <span>B-</span>
				<input type="number" name="bnve"  ></td>
                </div>
 </tr>
 <tr>
<th colspan="2">AB</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>AB+</span>
				<input type="number" name="abpve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>AB-</span>
				<input type="number" name="abnve"  ></td>
                </div>
 </tr>
     <tr>
    <td colspan="2"><input type="submit" name="save" Class="btn" value="Save" /></td>
</tr>
 </table>
</form>
 </div>        
</div>
    </center>
    </main>
    <?php include('footer.php');?>
</body>
</html>