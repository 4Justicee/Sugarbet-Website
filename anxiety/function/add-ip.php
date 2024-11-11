<?php
require_once('session.php');

$users = $u['user'];
$ip_address = mysqli_real_escape_string($conn, $_POST['ip_address']);
$date = date('Y-m-d');
$kode = date('YdmHis');
$query = mysqli_query($conn, "INSERT INTO `tb_whitelist` (`ip_address`) VALUES ('$ip_address')") or die(mysqli_error($conn));
header('location:../whitelist/?notif=1');
