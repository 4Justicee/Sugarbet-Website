<?php
require_once('session.php');
$users = $u['user'];
$pid = $_GET['pid'];
$periode = $_GET['periode'];

$getPeriode = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE `pid` = '$pid' AND `no` = '$periode'") or die(mysqli_error($conn));
$gpp = mysqli_fetch_array($getPeriode);
/*if($gpp['status'] == 0){*/
$kabupaten = mysqli_query($conn, "SELECT * FROM `tb_pasaran_result` WHERE pid = '$pid' AND periode = '$periode' ORDER BY cuid DESC") or die(mysqli_error($conn));
while ($kk = mysqli_fetch_array($kabupaten)) {
    $gameid = $kk['gameid'];
    $resultAngka = $kk['p_result'];
    $posisi = $kk['posisi'];

    //Update Menang All Market
    $cekMenang1 = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE `pid` = '$pid' AND `gameid` = '$gameid' AND `periode` = '$periode' AND `tebak` = '$resultAngka' AND `posisi` = '$posisi' AND `status` = 0") or die(mysqli_error($conn));
    $cmm1 = mysqli_num_rows($cekMenang1);
    if ($cmm1 > 0) {
        while ($cm1 = mysqli_fetch_array($cekMenang1)) {
            $cuid1 = $cm1['cuid'];
            $pemenang1 = $cm1['userID'];
            $jumlah1 = $cm1['jumlah'];
            $trxUserDp = json_decode($WL->transaksi($users, 'user_deposit', $jumlah1), true);
            if ($trxUserDp['status'] == 1) {
                $setWin1 = mysqli_query($conn, "UPDATE `tb_taruhan` SET `keterangan` = 'Menang', `status` = 1 WHERE cuid = '$cuid1'") or die(mysqli_error($conn));
                $setBalance1 = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + '$jumlah1' WHERE userID = '$pemenang1'") or die(mysqli_error($conn));
                $fiversUpdateCoin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$jumlah1' WHERE cuid = '1'") or die(mysqli_error($conn));
            } else {
                echo $trxUserDp['msg'];
                exit;
            }
        }
    }

    //Update Kalah All Market
    $cekKalah2 = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE `pid` = '$pid' AND `gameid` = '$gameid' AND `periode` = '$periode' AND `tebak` != '$resultAngka' AND `posisi` = '$posisi' AND `status` = 0") or die(mysqli_error($conn));
    $cmm2 = mysqli_num_rows($cekKalah2);
    if ($cmm2 > 0) {
        while ($cm2 = mysqli_fetch_array($cekKalah2)) {
            $cuid2 = $cm2['cuid'];
            $pemenang2 = $cm2['userID'];
            $jumlah2 = $cm2['jumlah'];
            $setLoss2 = mysqli_query($conn, "UPDATE `tb_taruhan` SET `keterangan` = 'Kalah', `status` = 1 WHERE cuid = '$cuid2'") or die(mysqli_error($conn));
        }
    }

    //Update Status
    $update = mysqli_query($conn, "UPDATE `tb_periode` SET `status` = 1 WHERE `pid` = '$pid' AND `no` = '$periode'") or die(mysqli_error($conn));
}
/*}*/
header('location:../betting/?pid=' . $pid . '&periode=' . $periode);
exit();
