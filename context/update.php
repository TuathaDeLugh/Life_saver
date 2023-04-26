<?php
session_start();
if ($_SESSION['user'] == "admin") {
    $user = "admin";
    $approve = "notapprove";
} else {
    $user = "bb";
    $approve = "notapprove";
}
include('db.php');
if (isset($_POST['upcamp'])) {
    $key = $_POST['key'];
    $username = $_POST['userid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $map = $_POST['map'];
    $mono = $_POST['mono'];
    $tag = $_POST['tag'];
    $image = $_POST['image'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $data = [
        'userid' => $username,
        'name' => $name,
        'address' => $address,
        'pin' => $pin,
        'map' => $map,
        'mono' => $mono,
        'tag' => $tag,
        'image' => $image,
        'date' => $date,
        'time' => $time,
    ];
    $postref = $database->getReference("campaign/$approve/$key")->update($data);
    setcookie("update", "Your $name campaign Updated", time() + 5, "/");
    header("location:../$user/campaign.php");
}
if (isset($_GET['delcamp'])) {
    $id = $_GET['delcamp'];
    $database->getReference("campaign/$approve/$id")->remove();
    setcookie("delete", "Your $name campaign Deleted", time() + 5, "/");
    header("location:../$user/campaign.php");
}
if (isset($_GET['delacamp'])) {
    $id = $_GET['delacamp'];
    $database->getReference("campaign/approve/$id")->remove();
    setcookie("delete", "Your $name campaign Deleted", time() + 5, "/");
    header("location:../$user/achange.php");
}
if (isset($_GET['delorg'])) {
    $id = $_GET['delorg'];
    $database->getReference("organ/userid/$id")->remove();
    setcookie("delete", " $id Organ request Deleted", time() + 5, "/");
    header("location:../$user/organ.php");
}
if (isset($_GET['delbb'])) {
    $bid = $_GET['delbb'];
    $database->getReference("weblogin/bloodbank/$bid")->remove();
    $database->getReference("blooddata/$bid")->remove();
    setcookie("delete", "$bid Blood Bank Deleted", time() + 5, "/");
    header("location:../admin/bbhome.php");
}
if (isset($_GET['deluser'])) {
    $id = $_GET['deluser'];
    $username = $_GET['name'];
    $database->getReference("Users/$id")->remove();
    setcookie("delete", "Selected User $username Deleted", time() + 5, "/");
    header("location:../admin/removeuser.php");
}
if (isset($_POST['appcamp'])) {
        $caid = $_POST['appcamp'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $pin = $_POST['pin'];
        $map = $_POST['map'];
        $mono = $_POST['mono'];
        $tag = $_POST['tag'];
        $image = $_POST['image'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $username = $_POST['userid'];
    $data = [
        'userid' => $username,
        'name' => $name,
        'id' => $caid,
        'address' => $address,
        'pin' => $pin,
        'map' => $map,
        'mono' => $mono,
        'tag' => $tag,
        'image' => $image,
        'date' => $date,
        'time' => $time,
    ];
    $store = $database->getReference("campaign/approve/$caid")->set($data);
    $database->getReference("campaign/notapprove/$caid")->remove();
    setcookie("update", "Campaign approved", time() + 5, "/");
    echo "<script>;
        window.location.replace('../admin/campaign.php');</script>";
    // header("location:../admin/updaterem.php");
}
?>