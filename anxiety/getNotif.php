<?php
include('session.php');
$today = date('Y-m-d');

$getDeposit =  mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE date LIKE '$today%' AND jenis = 1 AND status = 0 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$gdd = mysqli_num_rows($getDeposit);
if ($gdd > 0) {
    $gd = mysqli_fetch_array($getDeposit);
    $usersID = $gd['userID'];
    $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
    $gu = mysqli_fetch_array($getUser);
    echo '
		<div class="alert alert-info alert-dismissible text-dark" role="alert">
            Deposit baru dari ' . $gu['user'] . ' sebesar Rp. ' . number_format($gd['total'], 0, ",", ".") . '<br>
            <a href="' . $urladmin . '/request_depo/">Klik Disini</a> untuk konfirmasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup Navigasi"></button>
        </div>
	';
}

$getWithdraw =  mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE date LIKE '$today%' AND jenis = 2 AND status = 0 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$gww = mysqli_num_rows($getWithdraw);
if ($gww > 0) {
    $gw = mysqli_fetch_array($getWithdraw);
    $usersID = $gw['userID'];
    $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
    $gu = mysqli_fetch_array($getUser);
    echo '
		<div class="alert alert-danger alert-dismissible text-dark" role="alert">
            Permintaan withdraw dari ' . $gu['user'] . ' sebesar Rp. ' . number_format($gw['total'], 0, ",", ".") . '<br>
            <a href="' . $urladmin . '/request_wd/">Klik Disini</a> untuk konfirmasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup Navigasi"></button>
        </div>
	';
}

if ($gdd > 0 or $gww > 0) {
    echo '
        <audio id="dAudio" autoplay="autoplay" loop="loop" allow="autoplay">
            <source src="' . $urldomain . '/assets/audio/deposit.mp3" type="audio/mp3">
        </audio>
        <iframe src="' . $urldomain . '/assets/audio/deposit.mp3" allow="autoplay" id="iframedAudio" style="display: none"></iframe>
    ';
}
