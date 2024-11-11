<?php
require_once('session.php');
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$users = $u['user'];
$akun = mysqli_real_escape_string($conn, $_POST['akun']);
$akunimg = str_replace(' ', '', $akun);
$no_rek = mysqli_real_escape_string($conn, $_POST['no_rek']);
$pemilik = mysqli_real_escape_string($conn, $_POST['pemilik']);
$kode = date('YdmHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi  = $explode[count($explode) - 1];
$newname = 'pay_' . $akunimg . '.' . $extensi;
$upload_dir = "../../upload/bank/";
$created_date = date('Y-m-d H:i:s');

if ($postID == '') {
    $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE akun = '$akun' AND cuid = 1") or die(mysqli_error($conn));
    $q = mysqli_num_rows($sql_1);
    if ($q > 0) {
        header('location:../bank/?notif=4');
        exit();
    } else {
        if ($gbr !== "" && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
                $query = mysqli_query($conn, "INSERT INTO `tb_bank` (`image`, `akun`, `pemilik`, `no_rek`, `status`,`userID`) VALUES ('$newname', '$akun','$pemilik','$no_rek',1,1)") or die(mysqli_error($conn));
                header('location:../bank/?notif=1');
                exit();
            } else {
                header('location:../bank/?notif=3');
                exit();
            }
        } else {
            header('location:../bank/?notif=2');
            exit();
        }
    }
} else {
    $query = mysqli_query($conn, "UPDATE `tb_bank` SET `pemilik` = '$pemilik', `no_rek` = '$no_rek' WHERE cuid = '$postID'") or die(mysqli_error($conn));
    header('location:../bank/?postID=' . $postID . '&notif=1');
    exit();
}
