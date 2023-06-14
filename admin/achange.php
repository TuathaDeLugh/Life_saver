<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>

    
</head><style>
.acc {
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
            if (isset($_COOKIE['delete'])) {
                ?>
                <script>NolertNotify.trigger({type: 'danger',iconType: 'success',message: '<?php echo$_COOKIE['delete']?>'});</script>
                <?php
            }
            ?>
        <main id="main">
        <div class="block">
            <h2 class="text-primary text-center">Active Campaign</h2>
            <?php
        include('../context/db.php');
$i = 1;
    $getdata = $database->getReference("campaign/approve")->getValue();
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
                <td>Image</td>
                <td>date</td>
                <td>time</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
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
            <?php
            $refrance = $database->getReference("campaign/approve")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><a href="achange.php?map=<?php echo $row['map']; ?>"><img src="../img/location.png" class="icon"></a></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['tag']; ?></td>
                    <td><button data-modal-target="#image<?php echo $i ?>" class="nb"><img src="<?php echo $row['image']; ?>"
                                class="icon"></button></td>
                    <td id="<?php echo $i ?>"><?php echo $row['date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                    <td><button data-modal-target="#dlcamp<?php echo $i; ?>" class="btn btn-primary">Delete</button></td>
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
                <div class="modal" id="dlcamp<?php echo $i; ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h2>
                                <h2>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <h1>Do You Really Want to Delete This campaign?</h1>
                            <P><?php echo $row['name']; ?></P>
                            <h3>This campaign is running</h3>
                            <br>
                            <a href="../context/update.php?delacamp=<?php echo $key ?>" class="btn btn-primary">delete</a>
                            <center>
                    </div>
                    <div id="overlay"></div>
                </div>
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
             <h3>No Campaign avaliable</h3>
         <td>
     <tr>
  
       <?php
} ?>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>