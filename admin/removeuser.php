<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<style>.rmu {
    font-weight: 700;
    color: #F3525A;
}</style>
        <link href="../style/Admin/faq.css" rel="stylesheet" type="text/css" />
    <link href="../style/common/model.css" rel="stylesheet" type="text/css" />
    <link href="../style/Bloodbank/addcampaign.css" rel="stylesheet" />
    <script defer src="../js/model.js"></script>
    <link href="../js/toast.css" rel="stylesheet" />
    <script src="../js/toast.js"></script>
</head>
<body>
    <script>
        NolertNotify.setConfig({position: ('bottom-right'), closeIn: 5000});
        </script>
        <?php include('header.php');
    if (isset($_COOKIE['delete'])) {
        ?>
        <script>NolertNotify.trigger({type: 'danger',iconType: 'success',message: '<?php echo$_COOKIE['delete']?>'});</script>
        <?php
	}
    ?>
    <main id="main">
        <div class="block">
        <h2 class="text-primary text-center">Remove Users</h2>
        <?php
include('../context/db.php');
$i = 1;
$getdata = $database->getReference("Users")->getValue();
if ($getdata > 0) {
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>address</td>
                <td>Gender</td>
                <td>mono</td>
                <td>Email</td>
                <td>Birth Date</td>
                <td>Blood Group</td>
                <td>delete</td>
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
            $refrance = $database->getReference("Users")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['Full_name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo "nathi" //$row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['Gender']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['Phone_no']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['EmailId']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['Birth_date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['BloodGroup']; ?></td>
                    <td><button data-modal-target="#dluser<?php echo $i; ?>" class="btn btn-primary">Delete</button></td>
                </tr>
                <div class="modal" id="dluser<?php echo $i; ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h2>
                                <h2>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <h1>Do You Really Want to Delete This User?</h1><br>
                            <h3><?php echo $row['Full_name']; ?></h3><br>
                            <a href="../context/update.php?deluser=<?php echo $key ?>&name=<?php echo $row['Full_name']?>" class="btn btn-primary">delete</a>
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
} else {

    ?>
    <tr>
        <td colspan="7">
            <h3>No data avaliable</h3>
        <td>
    <tr>

        <?php
} ?>
        </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>