<?php
require_once('session.php');
$id = $_GET['cuid'];
$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE cuid = '$id'") or die(mysqli_error($conn));
$s1 = mysqli_fetch_array($sql_1);
$usersID = $s1['userID'];
$amounts = $s1['total'];
$trxID = $s1['kd_transaksi'];

if ($s1['status'] == 0) {
    //Tolak Deposit
    $getTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE trxID = '$trxID'") or die(mysqli_error($conn));
    $goo = mysqli_num_rows($getTO);
    if ($goo = 0) {
        $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `cuid` = '$id'") or die(mysqli_error($conn));
    } else {
        $updates = mysqli_query($conn, "UPDATE `tb_turnover` SET `status` = 0 WHERE `trxID` = '$trxID'") or die(mysqli_error($conn));
        $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `cuid` = '$id'") or die(mysqli_error($conn));
    }
    header('location:../request_depo/');
    exit();
} else {
    header('location:../request_depo/');
    exit();
}
