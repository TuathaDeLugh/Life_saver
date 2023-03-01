<!DOCTYPE html>
<html>
<body>
  <?php
if($_SESSION['user']=="admin"){
        $admin="admin";
    }
    else{
        $admin="bloodbank";
    }
    ?>
    <script>
      firebase
      .database()
      .ref("weblogin/" + '<?php echo $admin.'/'.$_SESSION['user'];?>' )
      .on("value", function (snap) {
        document.getElementById("username").value = snap.val().userid;
        document.getElementById("name").value = snap.val().name;
        document.getElementById("email").value = snap.val().email;
        document.getElementById("address").value = snap.val().address;
        document.getElementById("pin").value = snap.val().pin;
        document.getElementById("mono").value = snap.val().mono;
         document.getElementById("question").value = snap.val().question;
         document.getElementById("answer").value = snap.val().answer;
         document.getElementById("time").value = snap.val().time;
        });
        document.getElementById("update").onclick = function () {
          document.getElementById("name").disabled = false;
          document.getElementById("email").disabled = false;
          document.getElementById("address").disabled = false ;
          document.getElementById("pin").disabled = false ;
          document.getElementById("mono").disabled = false;
          document.getElementById("question").disabled = false;
          document.getElementById("answer").disabled = false;
          document.getElementById("time").disabled = false;
          document.getElementById("update").style.display = 'none';
          document.getElementById("save").style.display = 'block';
          
        }
        document.getElementById("save").onclick = function () {
          firebase
          .database()
          .ref("weblogin/" + '<?php echo $admin.'/'.$_SESSION['user'];?>')
          .update({
            'name': document.getElementById("name").value,
            'email': document.getElementById("email").value,
            'address': document.getElementById("address").value ,
            'pin': document.getElementById("pin").value ,
            'mono':document.getElementById("mono").value ,
            'question':document.getElementById("question").value ,
            'answer':document.getElementById("answer").value ,
            'time':document.getElementById("time").value ,
            
          });
          document.getElementById("name").disabled = true;
          document.getElementById("email").disabled = true;
          document.getElementById("address").disabled = true ;
          document.getElementById("pin").disabled = true ;
          document.getElementById("mono").disabled = true;
          document.getElementById("question").disabled = true;
          document.getElementById("answer").disabled = true;
          document.getElementById("time").disabled = true;
          document.getElementById("save").style.display = 'none';
          document.getElementById("update").style.display = 'block';
          swal('Profile Updated','','success');
        }
        </script>
</body>
</html>