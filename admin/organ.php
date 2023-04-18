<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>

    
</head><style>
.org {
            font-weight: 700;
            color: #F3525A;
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
            ?>
        <main id="main">
        <div class="block">
            <h2 class="text-primary text-center">Organ Request</h2>
        <?php
        include('../context/db.php');
$i = 1;
    $getdata = $database->getReference("organ")->getValue();
            if($getdata>0){
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>address</td>
                <td>pin</td>
                <td>mono</td>
                <td>Death Date</td>
                <td>Organ Name</td>
                
            </tr>
        </thead>
        <tbody>

            <?php
            $refrance = $database->getReference("organ")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['organuserid']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['deathdate']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['organname']; ?></td>
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
             <h3 class="text-center">No organ request avaliable</h3>
         <td>
     <tr>
  
       <?php
} ?>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>