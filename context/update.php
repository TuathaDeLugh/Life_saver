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
    $username = $_SESSION['user'];
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
    $postref = $database->getReference("campaign/$approve/$key")->set($data);
    setcookie("update", "Your $name campaign Updated", time() + 5, "/");
    header("location:../$user/campaign.php");
}
if (isset($_GET['delcamp'])) {
    $id = $_GET['delcamp'];
    $database->getReference("campaign/$approve/$id")->remove();
    setcookie("delete", "Your $name campaign Deleted", time() + 5, "/");
    header("location:../$user/campaign.php");
}
if (isset($_GET['delbb'])) {
    $bid = $_GET['delbb'];
    $database->getReference("weblogin/bloodbank/$bid")->remove();
    $database->getReference("blooddata/$bid")->remove();
    setcookie("delete", "$bid Blood Bank Deleted", time() + 5, "/");
    header("location:../admin/bbhome.php");
}
if (isset($_GET['appcamp'])) {
        $caid = $_GET['appcamp'];
        $campid = $_GET['campid'];
        $name = $_GET['name'];
        $address = $_GET['address'];
        $pin = $_GET['pin'];
        $map = $_GET['map'];
        $mono = $_GET['mono'];
        $tag = $_GET['tag'];
        $image = $_GET['image'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        $username = $_SESSION['user'];
    $data = [
        'userid' => $username,
        'name' => $name,
        'campaignid' => $campid,
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
    header("location:../admin/updaterem.php");
}
?>