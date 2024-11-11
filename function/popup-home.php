<?php


ob_start();
if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$status = 1;
$ipaddress = $_POST['ipaddress'];
$update = mysqli_query($conn, "UPDATE `tb_popup` SET status = 1 WHERE ip = '$ipaddress'") or die(mysqli_error($conn));
