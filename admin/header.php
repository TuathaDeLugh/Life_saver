<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/Master/nav.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../style/Master/master.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="text/javascript" src="../js/sweet.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <title>Life Saver Admin Panel</title>
</head>
<body>
    <?php
    session_start();
    ?>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="https://umangsailor.bsite.net" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase logo">Life Saver</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a  
                    href="../admin/home.php" class="nav-item nav-link"><u class="ahome">Home</u></a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle meu" data-bs-toggle="dropdown">Users</a>
                    <div class="dropdown-menu m-0">
                        <a  href="../admin/bloodapprove.php" class="dropdown-item"><u class="bdo">  Blood Donation</u></a>
                        <a  href="../admin/organ.php" class="dropdown-item" ><u class="org"> Organ request</u></a>
                        <a  href="../admin/removeuser.php" class="dropdown-item" ><u class="rmu"> Remove users</u></a>
                        <div class="dropdown-divider"></div> 
                        <a  href="../admin/campaign.php" class="dropdown-item" ><u class="ca"> Campaign</u></a>
                    <a  href="../admin/updaterem.php" class="dropdown-item" ><u class="ac"> Approve Campaign</u></a>

                    </div>
                </div>
                                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle bbm" data-bs-toggle="dropdown">Blood Bank</a>
                    <div class="dropdown-menu m-0">
                        <a  href="../admin/bbhome.php" class="dropdown-item"><u class="bb"> Bloodbank </u></a>
                        <a  href="../admin/blooddata.php" class="dropdown-item"><u class="bd"> Blood Data</u></a>
                        
                    </div>
                </div>
                <!-- <a ID="HyperLink4" href="../admin/tip.php" class="nav-item nav-link"><u class="tod">Tip of The Day </u></a> -->
                <a  href="../admin/faq.php" class="nav-item nav-link"><u class="faq">F & Q</u></a>
                
                    
                    <div class="nav-item dropdown">
                        <?php
                            if (isset($_SESSION['user']))
                            {
                                $uname=$_SESSION['user'];
                            }
                            if (!(isset($_SESSION['user'])))
                            {
                                $uname="?user?";
                            }
                            ?>
                    <a class="btn text-white btn-primary nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo$uname;?> Loged In</a>
                    <div class="dropdown-menu m-0">
                        <a  href="../admin/profile.php" class="dropdown-item"><u class="profile">Profile</u></a>
                        <a  href="../admin/change.php" class="dropdown-item"><u class="changepass">Change Password</u></a>
                        <div class="dropdown-divider"></div> 
                        <a href="../context/main.php?logout=logout"><Button class="btn btn-danger" Style="margin-left:20px;">Log Out</Button></a>
                      
                    </div>
                </div>
                
            </div>
        </div>
    </nav>
    <div class="ba" id="back" runat="server">
    <div class="loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>