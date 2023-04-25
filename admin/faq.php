<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<style>.faq {
    font-weight: 700;
    color: #F3525A;
}</style>  
    <link href="../style/Admin/faq.css" rel="stylesheet" type="text/css" />
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
        <h2 class="text-primary text-center">Feedback & Questions</h2>
    <?php 
     include('../context/faq.php');?>
    </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>