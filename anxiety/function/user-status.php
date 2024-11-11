<?php
require_once('session.php');
$id = $_GET['postID'];
$status = $_GET['status'];
$tipenya = $_GET['tipe'];
if ($status == 1) {
	$statusnya = 2;
} else if ($status == 2) {
	$statusnya = 1;
}
$query = mysqli_query($conn, "UPDATE `tb_user` SET status = '$statusnya' WHERE cuid = '$id'") or die(mysqli_error($conn));
if ($tipenya == 1) {
	header('location:../view/?postID=' . $id);
} else if ($tipenya == 2) {
	header('location:../user/');
}
