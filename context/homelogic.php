<?php
include('db.php');
error_reporting(E_ERROR | E_PARSE);
// rating
$i = 0;
$a = 0;
$refrance = $database->getReference("App Rating/rating")->getValue();
foreach ($refrance as $key => $row) {
    $b = $row['rating'];
    $a = $a + $b;
    $i++;
}
$rate = round(($a / $i), 2);
// user
$count = 0;
$refrance = $database->getReference("Users")->getValue();
foreach ($refrance as $key => $row) {

    $count++;
}
$user = $count;
// blood banks
$bbcount = 0;
$refrance = $database->getReference("weblogin/bloodbank")->getValue();
foreach ($refrance as $key => $row) {

    $bbcount++;
}
$bb = $bbcount;
// active campaign
$account = 0;
$refrance = $database->getReference("campaign/approve")->getValue();
foreach ($refrance as $key => $row) {

    $account++;
}
$ac = $account;
// not app campaign
$naccount = 0;
$refrance = $database->getReference("campaign/notapprove")->getValue();

foreach ($refrance as $key => $row) {

    $naccount++;
}
$nac = $naccount;
// organ
$orgcount = 0;
$refrance = $database->getReference("organ/userid")->getValue();

foreach ($refrance as $key => $row) {

    $orgcount++;
}
$org = $orgcount;

?>