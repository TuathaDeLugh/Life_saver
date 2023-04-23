<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/common/homepage.css" rel="stylesheet" type="text/css" />
<style>.ahome {
    font-weight: 700;
    color: #F3525A;
}
.card-1{
    flex-grow: 1;
}</style>  
 <link href="../style/common/model.css" rel="stylesheet" type="text/css" />
    <link href="../style/Bloodbank/addcampaign.css" rel="stylesheet" />
    <script defer src="../js/model.js"></script>
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
    }?>
                <?php
        if (isset($_GET['map'])) {
            $map = $_GET['map'];
            if (str_contains($map, "https://goo")) {
                ?>
                <script>window.open('<?php echo $map; ?>', '_blank');</script>
                <?php

            } elseif (str_contains($map, ",")) {
                ?>
                <script>window.open('https://www.google.com/maps/place/<?php echo $map; ?>', '_blank');</script>

                <?php
            } else {
                ?>
                <script>NolertNotify.trigger({ type: 'danger', iconType: 'info', message: 'Given Maplink Is Invalid' })</script>
                <?php
            }
        }
        ?>
    <main id="main">
        <div class="block">
        <?php   
                include('../context/homelogic.php');
                
                ?>
                <div class="cards">
<div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$rate";?></h1>
            <img class="cimage" src="../files/approve.png" />
          </div>          <h3 class="card__apply">
          Overall app rating
      </h3>
    </div>
    <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$user";?></h1>
            <img class="cimage" src="../files/user.png" />
          </div>          <h3 class="card__apply">
          total users
      </h3>
    </div>
    <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$bb";?></h1>
            <img class="cimage" src="../files/blood-bank.png" />
          </div>          <h3 class="card__apply">
          total blood bank
      </h3>
    </div>
        </div>
        </div>
        <div class="block">
        <div class="cards">
<div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$ac";?></h1>
            <img class="cimage" src="../files/appcampaign.svg" />
          </div>          <h3 class="card__apply">
          Active campaign
      </h3>
    </div>
    <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$nac";?></h1>
            <img class="cimage" src="../files/pancampaign.svg" />
          </div>          <h3 class="card__apply">
          Not approved campaign
      </h3>
    </div>
    <div class="card card-1">
<div class="image">
        
    <h1 class="card__title"><?php echo "$org";?></h1>
            <img class="cimage" src="../files/wanado.png" />
          </div>          <h3 class="card__apply">
          Organ request
      </h3>
    </div>
        </div>
        </div>
        <div class="block" style="max-height:70vh;">
        <h2 class="text-primary text-center">Active campaign</h2>
       <?php
        $i = 1;
    $getdata = $database->getReference("campaign/approve")->getValue();
            if($getdata>0){
                ?>
                <div style="overflow:auto;">
                 <table class="" style="width:100%;">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>address</td>
                <td>pin</td>
                <td>map</td>
                <td>mono</td>
                <td>tag</td>
                <td>Image</td>
                <td>date</td>
                <td>time</td>
            </tr>
        </thead>
        <tbody>

            <?php
            $refrance = $database->getReference("campaign/approve")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><a href="home.php?map=<?php echo $row['map']; ?>"><img src="../img/location.png" class="icon"></a></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['tag']; ?></td>
                    <td><button data-modal-target="#image<?php echo $i ?>" class=""><img src="<?php echo $row['image']; ?>" alt="No Image"
                                class="icon"></button></td>
                    <td id="<?php echo $i ?>"><?php echo $row['date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                </tr>
                <div class="modal" id="image<?php echo $i ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h3>Image<h3>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="<?php echo $row['image'] ?>" alt="Image" width="300px">
                            <center>
                    </div>
                </div>
                <div id="overlay"></div>
                <?php
                 $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
} 
else {

    ?>
     <tr>
         <td colspan="7">
             <h3>No Blood Bank avaliable</h3>
         <td>
     <tr>
  
       <?php
} ?>    
        </div>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>