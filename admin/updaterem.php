<!DOCTYPE html>
<html lang="en">
<head>    

<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<style>
        .ac {
            font-weight: 700;
            color: #F3525A;
        }
        .inputBox 
{   
	position: relative;
	width: 325px;
	margin-top: 0.3rem;
	margin-bottom: 10px;
    display: flex;
    text-align: left;
    flex-direction: column;
}
    </style>
    <link href="../style/Admin/faq.css" rel="stylesheet" type="text/css" />
    <link href="../style/common/model.css" rel="stylesheet" type="text/css" />
    <link href="../style/Bloodbank/addcampaign.css" rel="stylesheet" />
    <script defer src="../js/model.js"></script>
    <link href="../js/toast.css" rel="stylesheet" />
    <script src="../js/toast.js"></script> 
    <script>
        NolertNotify.setConfig({position: ('bottom-right'), closeIn: 15000});
        </script>
</head>
<body>
    <?php include('header.php');
        if (str_contains($_SERVER['HTTP_REFERER'], 'update.php')) {
            echo"<script> window.open(
                'https://console.firebase.google.com/u/0/project/finalproject1-c0216/notification/compose', '_blank');</script>";
        }
    	if (isset($_COOKIE['update'])) {
            ?>
            <script>NolertNotify.trigger({type: 'info',iconType: 'success',message: '<?php echo$_COOKIE['update']?>'});</script>
            <?php
        }?>
    <main id="main">
        <div class="block">
        <h2 class="text-primary text-center">Approve Campaign</h2>
        <?php
        include('../context/db.php');
$i = 1;
    $getdata = $database->getReference("campaign/notapprove")->getValue();
            if($getdata>0){
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>address</td>
                <td>pin</td>
                <td>map</td>
                <td>mono</td>
                <td>tag</td>
                <td>image</td>
                <td>date</td>
                <td>time</td>
                <td>Approve</td>
            </tr>
        </thead>
            <?php
            if (isset($_GET['map']))
            {   
                $map= $_GET['map'];
                if(str_contains($map,"https://goo"))
                    {   
                        ?>
                         <script>window.open('<?php echo$map;?>', '_blank');</script>
                       <?php
                       
                    }
                elseif(str_contains($map,","))
                {
                    ?>
                         <script>window.open('https://www.google.com/maps/place/<?php echo$map;?>', '_blank');</script>
                        
                       <?php
                }
                else
                {
                    ?>
                    <script>NolertNotify.trigger({type: 'danger',iconType: 'info',message: 'Given Maplink Is Invalid'})</script>
                <?php
                }
            }
            ?>
        <tbody>

            <?php
            $refrance = $database->getReference("campaign/notapprove")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><a href="updaterem.php?map=<?php echo $row['map']; ?>"><img src="../img/location.png" class="icon"></a></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['tag']; ?></td>
                    <td><button data-modal-target="#image<?php echo $i ?>" class=""><img src="<?php echo $row['image']; ?>"
                    class="icon"></button></td>
                    <td id="<?php echo $i ?>"><?php echo $row['date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                    <td id="<?php echo $i ?>">
                    <form action="../context/update.php?" method="post">
                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="address" value="<?php echo $row['address']; ?>">      
                    <input type="hidden" name="pin" value="<?php echo $row['pin']; ?>">  
                    <input type="hidden" name="map" value="<?php echo $row['map']; ?>">  
                    <input type="hidden" name="mono" value="<?php echo $row['mono']; ?>">  
                    <input type="hidden" name="tag" value="<?php echo $row['tag']; ?>">  
                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">  
                    <input type="hidden" name="date" value="<?php echo $row['date']; ?>">  
                    <input type="hidden" name="time" value="<?php echo $row['time']; ?>"> 
                    <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>">
                    <input type="hidden" name="appcamp" value="<?php echo$key?>">
                    <input type="submit" name="approve" value="approve" class="btn btn-primary">  
                    </form>
                    </td>
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
             <h3>No Campaign avaliable for approve</h3>
         <td>
     <tr>
  
       <?php
} ?>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>