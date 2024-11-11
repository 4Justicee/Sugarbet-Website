<?php
require_once('session.php');
$id = $_GET['cuid'];
$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE cuid = '$id'") or die(mysqli_error($conn));
$s1 = mysqli_fetch_array($sql_1);
$usersID = $s1['userID'];
$amounts = $s1['total'];
$getDataUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `cuid` = '$usersID'");
$fetchUser = mysqli_fetch_array($getDataUser);
$fiversUser = $fetchUser['user'];

if ($s1['status'] == 0) {
   $trxUserDp = json_decode($WL->transaksi($fiversUser, 'user_deposit', $amounts), true);
   if ($trxUserDp['status'] == 1) {
      $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `cuid` = '$id'") or die(mysqli_error($conn));
      $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `pending` = `pending` - '$amounts', `active` = `active` + '$amounts' WHERE `userID` = '$usersID'") or die(mysqli_error($conn));
   } else {
      echo $trxUserDp['msg'];
      exit;
   }
}
header('location:../request_wd/');
