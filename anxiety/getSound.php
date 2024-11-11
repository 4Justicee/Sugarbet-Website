<?php
include('session.php');
$today = date('Y-m-d');

$getDeposit =  mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis IN (1,2) AND status = 0 ORDER BY cuid DESC") or die(mysqli_error($conn));
$gdd = mysqli_num_rows($getDeposit);
if ($gdd > 0) {
    $gd = mysqli_fetch_array($getDeposit);
    $usersID = $gd['userID'];
    $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
    $gu = mysqli_fetch_array($getUser);
    echo '
        <audio id="dAudio" autoplay="autoplay" loop="loop" allow="autoplay">
            <source src="' . $urldomain . '/assets/audio/deposit.mp3" type="audio/mp3">
        </audio>
        <iframe src="' . $urldomain . '/assets/audio/deposit.mp3" allow="autoplay" id="iframedAudio" style="display: none"></iframe>
    ';
}
