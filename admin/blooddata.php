<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../files/logo.png" type="image/x-icon" />
    <style>
        .bd {
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

</head>

<body>
    <?php include('header.php'); ?>
    <main id="main">
        <div class="block">
            <?php
            include('../context/db.php');
            $i = 1;
            $getdata = $database->getReference("blooddata")->getValue();
            if ($getdata > 0) {
                ?>



                <table class="" style="width:100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>O+</td>
                            <td>O-</td>
                            <td>A+</td>
                            <td>A-</td>
                            <td>B+</td>
                            <td>B-</td>
                            <td>AB+</td>
                            <td>AB-</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $refrance = $database->getReference("blooddata")->getValue();
                        foreach ($refrance as $key => $row) { ?>
                            <tr>
                                <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $key; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['opve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['onve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['apve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['anve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['bpve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['bnve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['abpve']; ?></td>
                                <td id="<?php echo $i ?>"><?php echo $row['abnve']; ?></td>
                            </tr>
                            <?php $i++;}
                            ?>
                        </tbody>
                    </table>
                <?php 
            } ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>