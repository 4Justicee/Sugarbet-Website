<?php
require_once('session.php');
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$usere = strtolower(mysqli_real_escape_string($conn, $_POST['user']));
$user = str_replace(' ', '', $usere);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$pinTrx = md5('123456');
$level = 'user';
$join_date = date('Y-m-d H:i:s');

$cekusere = mysqli_query($conn, "SELECT * FROM `tb_user` ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$cus = mysqli_fetch_array($cekusere);
$cuid = $cus['cuid'] + 1;
$useridd = '1' . date('dmy') . $cuid;

$cekemail = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$user' OR email = '$email'") or die(mysqli_error($conn));
$q = mysqli_num_rows($cekemail);
if ($q > 0) {
    header('location:../member/?notif=2');
} else {
    $query = mysqli_query($conn, "INSERT INTO `tb_user` (`userid`, `user`, `pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `pinTrx`, `join_date`, `last_login`, `status`) VALUES ('$useridd', '$user', '$pass', '0', 'avatar.webp', '$full_name', '$email', '$no_hp', '$level', '', '$join_date', '$join_date', 1)") or die(mysqli_error($conn));

    header('location:../member/?notif=1');
}
