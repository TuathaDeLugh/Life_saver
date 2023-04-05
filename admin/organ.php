<!DOCTYPE html>
<html lang="en">
<head>    

<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<link href="../style/Admin/faq.css" rel="stylesheet" type="text/css" />
    <link href="../style/Bloodbank/addcampaign.css" rel="stylesheet" />
 
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
        <div class="block">
        <?php
include('../context/db.php');
$i = 1;
$getdata = $database->getReference("organ")->getValue();
if ($getdata > 0) {
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>user</td>
                <td>address</td>
                <td>Gender</td>
                <td>mono</td>
                <td>Email</td>
                <td>Birth Date</td>
                <td>Blood Group</td>
                
            </tr>
        </thead>
        <tbody>

            <?php
            $refrance = $database->getReference("organ")->getValue();
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
                </tr>
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