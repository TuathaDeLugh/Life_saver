<?php
include('db.php');
session_start();
$userid=$_SESSION['user'];
if ($_SESSION['user']=="admin"){
    $admin="admin";
    $page="admin/change.php";
}
else{
    $admin="bloodbank";
    $page="bb/change.php";
}
if (isset($_POST['updatepass'])){
    $oldpass=sha1($_POST['oldpass']);
    $newpass=sha1($_POST['newpass']);
    $conpass=sha1($_POST['conpass']);

    $checkdata = $database->getReference("weblogin/$admin/$userid/password")->getValue();
    if ($checkdata > 0) {
        $temppass = $checkdata;
        if(($temppass == $oldpass)) {
            if($newpass==$conpass){
                $data = [
                    'password' => $newpass];
                    $store = $database->getReference("weblogin/$admin/$userid")->update($data);
                setcookie("success", "Password changed", time() + 5, "/");
                header("location:../$page");

            }
            else{
                setcookie("alert", "new password & confirm password not match", time() + 5, "/");
                header("location:../$page");

            }

        }    
        else{
            setcookie("alert", "Invalid password", time() + 5, "/");
                header("location:../$page");
        }
    }
}
?>