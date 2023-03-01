<?php 
require '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


$firebase = (new Factory)
    ->withServiceAccount('key.json')
    ->withDatabaseUri('https://finalproject1-c0216-default-rtdb.asia-southeast1.firebasedatabase.app/');
    
    $database =$firebase->CreateDatabase();