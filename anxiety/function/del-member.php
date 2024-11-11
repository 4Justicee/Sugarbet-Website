<?php
require_once('session.php');
$id = $_GET['cuid'];
$tipenya = $_GET['tipe'];

$query1 = mysqli_query($conn, "DELETE FROM `tb_ppplayer` WHERE userID = '$id'") or die(mysqli_error($conn));
$query2 = mysqli_query($conn, "DELETE FROM `tb_taruhan` WHERE userID = '$id'") or die(mysqli_error($conn));
$query3 = mysqli_query($conn, "DELETE FROM `tb_transaksi` WHERE userID = '$id'") or die(mysqli_error($conn));
$query4 = mysqli_query($conn, "DELETE FROM `tb_bank` WHERE userID = '$id'") or die(mysqli_error($conn));
$query5 = mysqli_query($conn, "DELETE FROM `tb_balance` WHERE userID = '$id'") or die(mysqli_error($conn));
$query6 = mysqli_query($conn, "DELETE FROM `tb_turnover` WHERE userID = '$id'") or die(mysqli_error($conn));
$query7 = mysqli_query($conn, "DELETE FROM `tb_user` WHERE cuid = '$id'") or die(mysqli_error($conn));

if ($tipenya == 1) {
    header('location:../member/');
} else if ($tipenya == 2) {
    header('location:../user/');
} else {
    header('location:../user/');
}
