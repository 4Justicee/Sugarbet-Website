<?php
include('../session.php');

$userID = $u['cuid'];
$users = $u['user'];

$getLastBalance = json_decode($WL->getbalance($users), true);
$glb = $getLastBalance['user_list'];
echo 'Rp. ' . number_format($glb[0]['balance'], 0, ",", ".");
