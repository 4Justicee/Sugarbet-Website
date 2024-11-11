<?php
ob_start();
if (!isset($_SESSION)) { session_start(); }
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$_SESSION['user'] == '';
unset($_SESSION['user']);
session_destroy();
header('location:'.$urldomain.'/login');
?>