<?php
require_once('session.php');
$statusnya = $_GET['status'];
$query = mysqli_query($conn, "UPDATE `tb_seo` SET `onoff` = '$statusnya' WHERE cuid = 1") or die(mysqli_error($conn));
header('location:../maintenance/');
