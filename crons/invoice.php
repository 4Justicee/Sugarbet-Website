<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$datestar = date('Y-m-d H:i:s');
$datestop = date('Y-m-d H:i:s', strtotime($datestar . ' -1 day'));

$getTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 1 AND status = 0 AND date < '$datestop'") or die(mysqli_error($conn));
while ($gt = mysqli_fetch_array($getTransaksi)) {
    $cuid = $gt['cuid'];
    $kd_transaksi = $gt['kd_transaksi'];
    //Tolak Deposit
    $getTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE trxID = '$kd_transaksi'") or die(mysqli_error($conn));
    $goo = mysqli_num_rows($getTO);
    if ($goo = 0) {
        $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `cuid` = '$cuid'") or die(mysqli_error($conn));
    } else {
        $updates = mysqli_query($conn, "UPDATE `tb_turnover` SET `status` = 0 WHERE `trxID` = '$trxID'") or die(mysqli_error($conn));
        $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `cuid` = '$cuid'") or die(mysqli_error($conn));
    }
}
