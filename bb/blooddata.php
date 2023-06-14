<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/Bloodbank/bbblooddata.css" rel="stylesheet" type="text/css" />
    <link href="../js/toast.css" rel="stylesheet" />
    <script src="../js/toast.js"></script> 
    <script>
        NolertNotify.setConfig({position: ('bottom-right'), closeIn: 5000});
        </script>
    
</head>

<body>
    <?php include('header.php');
    if (isset($_COOKIE['update'])) {
        ?>
        <script>NolertNotify.trigger({type: 'info',iconType: 'success',message: '<?php echo$_COOKIE['update']?>'});</script>
        <?php
	}
    ?>
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
				<input type="number" id="opve" name="opve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>O-</span>
				<input type="number" id="onve" name="onve"  ></td></div>            
 </tr>
 <tr>
<th colspan="2">A</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>A+</span>
				<input type="number" id="apve" name="apve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>A-</span>
				<input type="number" id="anve" name="anve"  ></td>
                </div>
 </tr>
 <tr>
<th colspan="2">B</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>B+</span>
				<input type="number" id="bpve" name="bpve"  ></div>
    </td>
    <td>
        <div class="inputBox">
            <span>B-</span>
				<input type="number" id="bnve" name="bnve"  ></td>
                </div>
 </tr>
 <tr>
<th colspan="2">AB</th>
</tr>
<tr>
<td><div class="inputBox">
            <span>AB+</span>
				<input type="number" id="abpve" name="abpve"  ></div>
    </td>
    <td>
    <div class="inputBox">
            <span>AB-</span>
				<input type="number" id="abnve" name="abnve"  ></td>
                </div>
 </tr>
     <tr>
    <td colspan="2"><input type="submit" id="" name="save" Class="btn btn-primary" value="Save" /></td>
</tr>
 </table>
</form>
 </div>        
</div>
    </center>
    </main>
    <?php include('footer.php');?>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase.js"></script>
    <script src="../context/firebaseconfig.js"></script>
    <script>
      firebase
      .database()
      .ref("blooddata/" + '<?php echo$_SESSION['user'];?>' )
      .on("value", function (snap) {
        document.getElementById("opve").value = snap.val().opve;
        document.getElementById("onve").value = snap.val().onve;
        document.getElementById("apve").value = snap.val().apve;
        document.getElementById("anve").value = snap.val().anve;
        document.getElementById("bpve").value = snap.val().bpve;
        document.getElementById("bnve").value = snap.val().bnve;
        document.getElementById("abpve").value = snap.val().abpve;
        document.getElementById("abnve").value = snap.val().abnve;
        });
</script>
</body>
</html>