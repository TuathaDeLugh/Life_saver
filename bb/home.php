<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
    <style type="text/css">
           
        .ahome {
    font-weight: 700;
    color: #F3525A;
}
        @media (min-width: 800px) {
            .card {
                width: 350px;
            }
        }
    </style>

    
</head>

<body>
    <?php include('header.php');
    ?>

    <main id="main">
        <div class="block">
        <link href="../style/common/homepage.css" rel="stylesheet" />
<div class="heading">
<h2><i>Blood Data</i></h2></div>
<div class="cards">
<div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="total"></h1>
            <img class="cimage" src="../files/blood-bank.png" />
          </div>          <h3 class="card__apply">
          Total no. of blood
      </h3>
    </div>     
<div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="opve"></h1>
            <img class="cimage" src="../files/Op.png" />
          </div>          <h3 class="card__apply">
          O+  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="onve"></h1>
            <img class="cimage" src="../files/On.png" />
          </div>          <h3 class="card__apply">
          O-  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="apve"></h1>
            <img class="cimage" src="../files/Ap.png" />
          </div>          <h3 class="card__apply">
          A+  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="anve"></h1>
            <img class="cimage" src="../files/An.png" />
          </div>          <h3 class="card__apply">
          A-  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="bpve"></h1>
            <img class="cimage" src="../files/Bp.png" />
          </div>          <h3 class="card__apply">
          B+  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="bnve"></h1>
            <img class="cimage" src="../files/Bn.png" />
          </div>          <h3 class="card__apply">
          B-  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="abpve"></h1>
            <img class="cimage" src="../files/ABp.png" />
          </div>          <h3 class="card__apply">
          AB+  Blood 
      </h3>
    </div>
         <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><label id="abnve"></h1>
            <img class="cimage" src="../files/ABn.png" />
          </div>             <h3 class="card__apply">AB-  Blood 
             </h3>
    </div>
    </div>
    </div>
   

    
        </div>
        </div>
    </main>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase.js"></script>
    <script src="../context/firebaseconfig.js"></script>
    <script>
      firebase
      .database()
      .ref("blooddata/" + '<?php echo$_SESSION['user'];?>' )
      .on("value", function (snap) {
          document.getElementById("opve").textContent = snap.val().opve;
          document.getElementById("onve").textContent = snap.val().onve;
          document.getElementById("apve").textContent = snap.val().apve;
          document.getElementById("anve").textContent = snap.val().anve;
          document.getElementById("bpve").textContent = snap.val().bpve;
          document.getElementById("bnve").textContent = snap.val().bnve;
          document.getElementById("total").textContent = parseFloat(snap.val().opve)+parseFloat(snap.val().onve)
                                                        +parseFloat(snap.val().apve)+parseFloat(snap.val().anve)
                                                        +parseFloat(snap.val().bpve)+parseFloat(snap.val().bnve)
                                                        +parseFloat(snap.val().abpve)+parseFloat(snap.val().abnve);
          document.getElementById("abpve").textContent = snap.val().abpve;
          document.getElementById("abnve").textContent = snap.val().abnve;
        });
</script>
    <?php include('footer.php');?>
</body>
</html>