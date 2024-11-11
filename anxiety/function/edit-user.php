<?php
require_once('session.php');
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$re_pass = $_POST['pass'];
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$kode = date('YdmHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi  = $explode[count($explode) - 1];
$newname = 'avatar_' . $users . '.' . $extensi;
$upload_dir = "../../upload/avatar/";
if ($re_pass == '') {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "UPDATE `tb_user` SET `image` = '$newname', `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
            header('location:../e_user/?notif=1');
        } else {
            header('location:../e_user/?notif=3');
        }
    } else {
        $query = mysqli_query($conn, "UPDATE `tb_user` SET `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
        header('location:../e_user/?notif=1');
    }
} else {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "UPDATE `tb_user` SET `image` = '$newname', `pass` = '$pass', `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
            $_SESSION['user'] == '';
            unset($_SESSION['user']);
            session_destroy();
            header('location:../');
        } else {
            header('location:../e_user/?notif=3');
        }
    } else {
        $query = mysqli_query($conn, "UPDATE `tb_user` SET `pass` = '$pass', `full_name` = '$full_name', `no_hp` = '$no_hp', `email` ='$email' WHERE cuid = '$postID'") or die(mysqli_error($conn));
        $_SESSION['user'] == '';
        unset($_SESSION['user']);
        session_destroy();
        header('location:../');
    }
}
