<?php


require_once('session.php');
$akun = mysqli_real_escape_string($conn, $_POST['akun']);
$pemilik = mysqli_real_escape_string($conn, $_POST['pemilik']);
$no_rek = mysqli_real_escape_string($conn, $_POST['no_rek']);

if ($gantirek == '0') {
	header('location:' . $urldomain . '/bank?notif=2');
	exit();
} else if ($gantirek == '1') {
	$query = mysqli_query($conn, "UPDATE `tb_bank` SET `akun` ='$akun', `pemilik` = '$pemilik', `no_rek` = '$no_rek' WHERE userID = '$userID'") or die(mysqli_error($conn));
	header('location:' . $urldomain . '/bank?notif=1');
	exit();
} else {
	header('location:' . $urldomain . '/bank');
	exit();
}
