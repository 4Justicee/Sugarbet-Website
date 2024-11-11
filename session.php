<?php
ob_start();
if (!isset($_SESSION)) {
  session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('config/koneksi.php');

$sid = session_id();
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = 1") or die(mysqli_error($conn));
$s1b = mysqli_fetch_array($sql_1);

if (empty($_SESSION['user']) and empty($_SESSION['pass'])) {
  header('location:' . $urldomain . '/login?notif=6');
  exit();
}

$user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
$u = mysqli_fetch_array($user);
$email = $u['email'];
$users = $u['user'];
$full_name = $u['full_name'];
$id_user = $u['cuid'];
$userID = $u['cuid'];
$userLevel = $u['userlevel'];
$externalPlayerId = $u['extplayer'];
$token_id = isset($u['token_id']) ? $u['token_id'] : false;
$level = isset($u['level']) ? $u['level'] : false;

$sql_3 = json_decode($WL->getbalance($users), true);
$s3 = $sql_3['user_list'];
$fiversBalance = $s3[0]['balance'];

$updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = '$fiversBalance' WHERE `userID` = '$userID'");

$sql_banks = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = '$userID'") or die(mysqli_error($conn));
$sbs = mysqli_fetch_array($sql_banks);

//Search contain text payment method
$inibankuser = $sbs['akun'];
$inibankuser = explode(' ', $inibankuser);
$inibankuser = implode("%' OR `akun` LIKE '% AND userID = 1", $inibankuser);
