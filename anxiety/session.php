<?php
ob_start();
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$fiversAgentData = json_decode($WL->getbalanceAgent(), true);
$fiversAgent = $fiversAgentData['agent_code'];
$fiversAgentBalance = $fiversAgent['agent_balance'];

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

if (empty($_SESSION['user']) and empty($_SESSION['pass'])) {
	header('location:' . $urladmin);
	exit();
}

$usernya = $_SESSION['user'];
$user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$usernya'") or die(mysqli_error($conn));
$u = mysqli_fetch_array($user);
$email = $u['email'];
$users = $u['user'];
$full_name = $u['full_name'];
$id_user = $u['cuid'];
$userID = $u['cuid'];
$token_id = isset($u['token_id']) ? $u['token_id'] : false;
$level = isset($u['level']) ? $u['level'] : false;

if ($u['level'] == 'reseller' || $u['level'] == 'vip' || $u['level'] == 'user') {
	$_SESSION['user'] == '';
	unset($_SESSION['user']);
	session_destroy();
	header('location:' . $urldomain . '/login');
}

if (!validateToken($token_id)) {
	$_SESSION['token'] = "";
	$_SESSION['user'] = "";
	$_SESSION['pass'] = "";
	header('location:' . $urladmin . '/?error=5');
	exit();
}

function validateToken($token_id)
{
	$conn = $GLOBALS['conn'];
	$q = mysqli_query($conn, "SELECT * FROM `tb_token` WHERE cuid='$token_id';") or die(mysqli_error($conn));
	if (mysqli_num_rows($q) > 0) {
		$token_data = mysqli_fetch_array($q);
		$token = $token_data['token'];
		$session_token = isset($_SESSION['token']) ? $_SESSION['token'] : "";

		if ($token == $session_token) {
			return true;
		}
	}

	return false;
}

$bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$bulane = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli', 'Agus', 'Sept', 'Okt', 'Nov', 'Des');
