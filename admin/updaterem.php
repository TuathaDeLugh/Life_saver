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
    <main id="main">
        <div class="block">
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
                <td>date</td>
                <td>time</td>
                <td>Approve</td>
            </tr>
        </thead>
        <tbody>

            <?php
            $refrance = $database->getReference("campaign/notapprove")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
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
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><a href="updaterem.php?map=<?php echo $row['map']; ?>"><button class="btn btn-primary">map</button></a></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['tag']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                    <td id="<?php echo $i ?>"><a href="../context/update.php?appcamp=<?php echo$key?>&name=<?php echo$row['name']?>&name=<?php echo$row['address']?>&address=<?php echo$row['address']?>&pin=<?php echo$row['pin']?>&image=<?php echo$row['image']?>&map=<?php echo$row['map']?>&mono=<?php echo$row['mono']?>&tag=<?php echo$row['tag']?>&date=<?php echo$row['date']?>&time=<?php echo$row['time']?>&campid=<?php echo$row['campid']?>" class="btn btn-primary">Approve</a></td>
                </tr>
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
    </main>
    <?php include('footer.php');?>
</body>
</html>