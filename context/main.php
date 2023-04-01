<?php
include('db.php');
session_start();
if (isset($_POST['feedback'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date = date("d-m-y_h:i:sa");
    $data = [
        'name' => $name,
        'email' => $email,
        'type' => $type,
        'subject' => $subject,
        'message' => $message,
        'date' => $date,
    ];
    $postref = $database->getReference("feedback/" . "$name $subject")->set($data);
    setcookie("alert", "Your $type request saved", time() + 5, "/");
    header("location:../contactus.php");
}

function login($userid,$password)
{   global $database;
    if($userid=="admin"){
        $admin="admin";
        $loc="admin/home.php";
    }
    else{
        $admin="bloodbank";
        $loc="bb/home.php";
    }
    if (empty($userid) or empty($password)) {
        setcookie("alert", "Please fill all following data", time() + 5, "/");
        header("location:../login.php");
    } 
    else {
        $checkdata = $database->getReference("weblogin/$admin/$userid/password")->getValue();
        if ($checkdata > 0) {
                $temppass = $checkdata;
                
            
            if(($temppass == $password)) {
                if(isset($_POST['remember'])){
                    setcookie("user", $userid , time() + 3600, "/");
                    setcookie("pass", $password , time() + 3600, "/");       
                }   
                    $_SESSION['user']="$userid";
                    header("location:../$loc");
            }
             else {
                setcookie("alert", "Invalid userid or password", time() + 5, "/");
                header("location:../login.php");
            }
            
        } else {
            setcookie("alert", "Invalid userid or password", time() + 5, "/");
            header("location:../login.php");
        }

    }
}
if (isset($_POST['login'])) {
    $user = $_POST['userid'];
    $pass = sha1($_POST['password']);
    login($user,$pass);
}
if (isset($_GET['autofill'])) {
    if (isset($_COOKIE['user'])){
    $user = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];
    login($user,$pass);
    }
    if (empty($_COOKIE['user']))
    {
        setcookie("noc", "No autofill data found", time() + 5, "/");
        header("location:../login.php");
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("location:../login.php");
}
?>