<?php
require_once('session.php');
$trxID = mysqli_real_escape_string($conn, $_POST['trxID']);

if (isset($_POST['cancel'])) {
    $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
    $s2 = mysqli_fetch_array($sql_2);
    $iniuser = $s2['userID'];
    $iniamounts = $s2['total'];
    if ($s2['status'] == 0) {
        $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `kd_transaksi` = '$trxID'") or die(mysqli_error($conn));
        $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `pending` = `pending` - '$iniamounts', `active` = `active` + '$iniamounts' WHERE `userID` = '$iniuser'") or die(mysqli_error($conn));
        $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` + '$iniamounts' WHERE cuid = '1'") or die(mysqli_error($conn));
        header('location:../withdraw');
        exit();
    } else {
        header('location:../withdraw');
        exit();
    }
} else {
    header('Location:' . $urldomain . '/history');
    exit();
}
