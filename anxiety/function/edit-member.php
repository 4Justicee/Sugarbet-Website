<?php
require_once('session.php');
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$re_pass = $_POST['pass'];
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$akun = mysqli_real_escape_string($conn, $_POST['akun']);
$no_rek = mysqli_real_escape_string($conn, $_POST['no_rek']);

if ($re_pass == '') {
    $query = mysqli_query($conn, "UPDATE `tb_user` SET `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
    $query1 = mysqli_query($conn, "UPDATE `tb_bank` SET `akun` = '$akun', `no_rek` = '$no_rek', `pemilik` ='$full_name' WHERE userID = '$postID'") or die(mysqli_error($conn));
    header('location:../view/?postID=' . $postID . '&notif=1');
    exit();
} else {
    $query = mysqli_query($conn, "UPDATE `tb_user` SET `pass` = '$pass', `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
    $query1 = mysqli_query($conn, "UPDATE `tb_bank` SET `akun` = '$akun', `no_rek` = '$no_rek', `pemilik` ='$full_name' WHERE userID = '$postID'") or die(mysqli_error($conn));
    header('location:../view/?postID=' . $postID . '&notif=1');
    exit();
}
