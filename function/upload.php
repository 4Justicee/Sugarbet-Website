<?php


ob_start();
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$date = date('Y-m-d H:i:s');

$ipaddress = $_GET['ipaddress'];
$sessionid = $_GET['sessionid'];
$upload_dir = "../upload/";
$valid_extensions = array('jpeg', 'jpg', 'png');
$img = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$final_image = rand(1000, 1000000) . $img;
$gambarnya = '<img src="' . $urldomain . '/upload/' . $final_image . '" style="width:100%; height: auto;"">';
if (in_array($ext, $valid_extensions)) {
	move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir . $final_image);
	$cekChat = mysqli_query($conn, "SELECT * FROM `tb_chat` WHERE ipaddress = '$ipaddress' AND sessionid = '$sessionid'") or die(mysqli_error($conn));
	$cc = mysqli_fetch_array($cekChat);
	$userid = $cc['userid'];
	$insert_chat = mysqli_query($conn, "INSERT INTO `tb_chat_respon` (`sessionid`, `ipaddress`, `userid`, `content`, `jenis`, `created_date`, `status`) VALUES ('$sessionid','$ipaddress', '$userid','$gambarnya', 1,'$date', 0)") or die(mysqli_error($conn));
}
