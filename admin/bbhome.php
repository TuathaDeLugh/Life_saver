<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../files/logo.png" type="image/x-icon" />
    <style>
        .bb {
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
                <h2>Add new Blood Bank<h2>
            </div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <center>
                <form action="../context/create.php" method="post">
                <table>
<tr>
<td>Username</td>
<td>
    <input type="text" id="username" name="username"    required >
   </td>
</tr>
<tr>
<td>Name</td>
<td>
    <input type="text" id="name" name="name"    required>
    </td>
</tr>
<tr>
<td>Email</td>
<td>
    <input type="text" id="email" name="email"    required>
    </td>
</tr>
<tr>
<td>address</td>
<td>
    <textarea id="address" name="address" rows="5"  required></textarea>

    </td>
</tr>
<tr>
<td>Password</td>
<td>
    <input type="text" id="password" name="password"    required>
</td>
</tr>
<tr>
<td>Pin code</td>
<td>
    <input type="text" id="pin" name="pin"    required>
</td>
</tr>
<tr>
<td>Contact no</td>
<td>
    <input type="text" id="mono" name="mono"   required>
 
                 
              </td>
</tr>
<tr>
<td>Security Question</td>
<td>
    <input type="text" id="question" name="question"   required>

    </td>
</tr>
<tr>
<td>Security Answer</td>
<td>
    <input type="text" id="answer" name="answer"    required>

    </td>
</tr>
<tr>
<td>Active time</td>
<td>
    <input type="text" id="time" name="time"    required>

    </td>
</tr>
<td><center><button name="addbb" class="btn btn-primary" value="addbb">Add</button></center></td>
    </tr>
    </table>
                </form>
            </center>
        </div>
    </div>
    <div id="overlay"></div>
    <main id="main">
        <div class="block">
            <button data-modal-target="#newcamp" class="btn btn-primary">Add Blood Bank</button>
            <?php include('../context/bbdata.php');?>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script defer src="../js/model.js"></script>
</body>

</html>