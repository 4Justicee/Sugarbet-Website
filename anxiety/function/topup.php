<?php
require_once('session.php');

$usersID = mysqli_real_escape_string($conn, $_POST['userID']);
$amounts = mysqli_real_escape_string($conn, $_POST['nominal']);
$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);

$getDataUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `cuid` = '$usersID'");
$fetchUser = mysqli_fetch_array($getDataUser);
$fiversUser = $fetchUser['user'];

$today = date('Y-m-d');
$sql_3 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$s33 = mysqli_num_rows($sql_3);
if ($s33 == 0) {
    $unikID = 0;
} else {
    $s3 = mysqli_fetch_array($sql_3);
    $unikID = $s3['cuid'];
}
$no_invoice = 'INV/' . date('y') . '/' . date('m') . '/' . date('s') . $unikID;
$unik = date('Hs');
$kode_unik = substr(str_shuffle(1234567890), 0, 3);
$orderid = $kode_unik . date('dis');
$created_date = date('Y-m-d H:i:s');

$getBalance = json_decode($WL->getbalance($fiversUser), true);
$gb = $getBalance['user_list'];
$saldoAktif = $gb[0]['balance'];

if ($jenis == 0) {
    $newSaldo = $saldoAktif + $amounts;
    $trxUserDp = json_decode($WL->transaksi($fiversUser, 'user_deposit', $amounts), true);
    if ($trxUserDp['status'] == 1) {
        $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$no_invoice','$created_date','Top Up Saldo','$amounts',0,'Top Up','', '1', '1','1','0','$usersID',1)") or die(mysqli_error($conn));
        $update_balace = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = '$newSaldo' WHERE userID = '$usersID'") or die(mysqli_error($conn));
        $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$amounts' WHERE cuid = '1'") or die(mysqli_error($conn));
        header('location:../balance/?notif=1');
    } else {
        echo $trxUserDp['msg'];
        exit;
    }
} else if ($jenis == 1) {
    if ($saldoAktif < $amounts) {
        header('location:../balance/?notif=2');
    } else {
        $newSaldos = $saldoAktif - $amounts;
        if ($newSaldos < 0) {
            $newSaldo = 0;
        } else {
            $newSaldo = $newSaldos;
        }
        $trxUserWd = json_decode($WL->transaksi($fiversUser, 'user_withdraw', $amounts), true);
        if ($trxUserWd['status'] == 1) {
            $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$no_invoice','$created_date','Pengurangan Saldo','$amounts',0,'Pengurangan Saldo','', '1','2','0','0','$usersID',1)") or die(mysqli_error($conn));
            $update_balace = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = '$newSaldo' WHERE userID = '$usersID'") or die(mysqli_error($conn));
            $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` + '$amounts' WHERE cuid = '1'") or die(mysqli_error($conn));
            header('location:../balance/?notif=1');
        } else {
            echo $trxUserDp['msg'];
            exit;
        }
    }
} else if ($jenis == 2) {
    $newSaldo = $saldoAktif + $amounts;
    $trxUserDp = json_decode($WL->transaksi($fiversUser, 'user_deposit', $amounts), true);
    if ($trxUserDp['status'] == 1) {
        $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$no_invoice','$created_date','Bonus Saldo','$amounts',0,'Bonus','', '1', '1','1','0','$usersID',1)") or die(mysqli_error($conn));
        $update_balace = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = '$newSaldo' WHERE userID = '$usersID'") or die(mysqli_error($conn));
        $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$amounts' WHERE cuid = '1'") or die(mysqli_error($conn));
        header('location:../balance/?notif=1');
    } else {
        echo $trxUserDp['msg'];
        exit;
    }
} else {
    header('location:../balance/?notif=3');
}
