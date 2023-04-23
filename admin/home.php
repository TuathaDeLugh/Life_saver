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
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
        <div class="block">
        <?php   
                include('../context/db.php');
                $i=0;
                $a=0 ;
                $refrance= $database->getReference("App Rating/rating")->getValue();
                 foreach($refrance as $key=>$row)
                 {
                    $b=$row['rating'];
                    $a=$a+$b;
                    $i++;
                 }
                 $rate = $a/$i;
                $count=0;
                $refrance= $database->getReference("Users")->getValue();
                 foreach($refrance as $key=>$row)
                 {
                    
                    $count++;
                 }
                 $user = $count;
                 $bbcount=0;
                $refrance= $database->getReference("weblogin/bloodbank")->getValue();
                 foreach($refrance as $key=>$row)
                 {
                    
                    $bbcount++;
                 }
                 $bb = $bbcount;
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
    </main>
    <?php include('footer.php');?>
</body>
</html>