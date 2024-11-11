<?php


ob_start();
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

if (empty($_SESSION['user']) and empty($_SESSION['pass'])) {
	header('location:' . $urldomain . '/login');
	exit();
}

$user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
$u = mysqli_fetch_array($user);
$email = $u['email'];
$users = $u['user'];
$full_name = $u['full_name'];
$userID = $u['cuid'];
$token_id = isset($u['token_id']) ? $u['token_id'] : false;
$level = isset($u['level']) ? $u['level'] : false;

$sql_3 = json_decode($WL->getbalance($users), true);
$s3 = $sql_3['user_list'];
$saldo_active = $s3[0]['balance'];
