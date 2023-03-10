<?php
include('db.php');
session_start();
if (isset($_POST['save'])) {
    $opve=$_POST['opve'];
    $onve=$_POST['onve'];
    $apve=$_POST['apve'];
    $anve=$_POST['anve'];
    $bpve=$_POST['bpve'];
    $bnve=$_POST['bnve'];
    $abpve=$_POST['abpve'];
    $abnve=$_POST['abnve'];
    $data = [
        'opve'=>$opve,
        'onve'=>$onve,
        'apve'=>$apve,
        'anve'=>$anve,
        'bpve'=>$bpve,
        'bnve'=>$bnve,
        'abpve'=>$abpve,
        'abnve'=>$abnve,

    ];
    $postref = $database->getReference("blooddata/".$_SESSION['user'])->set($data);
    setcookie("update", "Your Blood Data Updated", time() + 5, "/");
    header("location:../bb/blooddata.php");
}
?>