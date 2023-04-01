<?php 
session_start();
if($_SESSION['user']=="admin"){
    $user="admin";
    $approve="notapprove";
}
else{
    $user="bb";
    $approve="notapprove";
}
include('db.php');
if (isset($_POST['crcamp']))
{   
    $username = $_SESSION['user'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $map = $_POST['map'];
    $mono = $_POST['mono'];
    $tag = $_POST['tag'];
    $image = $_POST['image'];
    $date = $_POST['date1']." To ".$_POST['date2'];
    $time = $_POST['time1']." To ".$_POST['time2'];
    $id="$name"." by "."$username";
    $data = [
        'id'=> $id,
        'userid'=>$username,
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
    $postref = $database->getReference("campaign/$approve/" . "$name"." by "."$username")->set($data);
    setcookie("success", "Your $name campaign request saved", time() + 5, "/");
    header("location:../$user/campaign.php");
}

if (isset($_POST['addbb']))
{   
    $pass=sha1($_POST['password']);
    $username = $_POST['username'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $password = $pass;
    $mono = $_POST['mono'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $time = $_POST['time'];
    $blooddata = [
        'opve'=>"0",
        'onve' => "0",
        'apve' => "0",
        'anve' => "0",
        'bpve' => "0",
        'bnve' => "0",
        'abpve' => "0",
        'abnve' => "0",
    ];
    $data = [
        'userid'=>$username,
        'name' => $name,
        'address' => $address,
        'pin' => $pin,
        'password' => $password,
        'email' => $email,
        'mono' => $mono,
        'question' =>$question,
        'answer' => $answer,
        'time' => $time,
    ];
    $postref = $database->getReference("weblogin/bloodbank/$username")->set($data);
    $postref = $database->getReference("blooddata/$username")->set($blooddata);
    setcookie("success", "blood bank $name added", time() + 5, "/");
    header("location:../admin/bbhome.php");
}