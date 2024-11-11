<?php
require_once('session.php');
$id = $_GET['cuid'];
$tipenya = $_GET['tipe'];
$query = mysqli_query($conn, "DELETE FROM `tb_user` WHERE cuid = '$id'") or die(mysqli_error($conn));
if ($tipenya == 1) {
    header('location:../member/');
} else if ($tipenya == 2) {
    header('location:../user/');
} else {
    header('location:../user/');
}
