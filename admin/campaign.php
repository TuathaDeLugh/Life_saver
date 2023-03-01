<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../files/logo.png" type="image/x-icon" />
    <style>
        .ca {
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
        
        </head>
        
        <body>
        
        <script>
        NolertNotify.setConfig({position: ('bottom-right'), closeIn: 5000});
        </script>
        <?php include('header.php'); 
    if (isset($_COOKIE['success'])) {
        ?>
		<script>NolertNotify.trigger({type: 'success',iconType: 'success',message: '<?php echo$_COOKIE['success']?>'});</script>
		<?php
	}
	if (isset($_COOKIE['update'])) {
        ?>
        <script>NolertNotify.trigger({type: 'info',iconType: 'success',message: '<?php echo$_COOKIE['update']?>'});</script>
        <?php
	}
    if (isset($_COOKIE['delete'])) {
        ?>
        <script>NolertNotify.trigger({type: 'danger',iconType: 'success',message: '<?php echo$_COOKIE['delete']?>'});</script>
        <?php
	}
    ?>
    <div class="modal" id="newcamp">
        <div class="modal-header">
            <div class="title">
                <h2>Create Campaign<h2>
            </div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <center>
                <form action="../context/create.php" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" name="name" class="design" required>
                            </td>

                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <textarea name="address" class="design" required></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td>Pincode</td>
                            <td>
                                <input type="number" name="pin" class="design" required TextMode="Number">

                            </td>
                        </tr>
                        <!-- <tr>
                            <td colspan="2">Wana include map link?&nbsp;&nbsp;
                                <input type="CheckBox" id="tick"
                                    onclick="myFunction()" />&nbsp;&nbsp;&nbsp;&nbsp;<span>*Tick if yes</span>
                            </td>


                        </tr> -->
                        <tr >
                        <td>Map Link</td>
                            <td>
                                <input type="text" name="map" class="design">

                            </td>
                        </tr>

                        <tr>
                            <td>Mobile Numnber</td>
                            <td>
                                <input type="number" name="mono" class="design" required>

                            </td>
                        </tr>
                        <tr>
                            <td>Tag Line</td>
                            <td>
                                <input type="text" name="tag" class="design" required>

                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <input type="text" name="image" class="design" required>

                            </td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>
                                <input type="date" name="date1" class="design" required> TO <input type="date"
                                    name="date2" class="design" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td>
                                <input type="time" name="time1" class="design" required> TO <input type="time"
                                    name="time2" class="design" required>

                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" Class="btn btn-primary" name="crcamp" value="Create Campaign">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>
    <div id="overlay"></div>
    <main id="main">
        <div class="block">
            <button data-modal-target="#newcamp" class="btn btn-primary">Create Campaign</button>
            <?php include('../context/adaca.php');?>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script defer src="../js/model.js"></script>
    <!-- <script>function myFunction() {

            var checkBox = document.getElementById("tick");

            var text = document.getElementById("map");


            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }</script> -->
</body>

</html>