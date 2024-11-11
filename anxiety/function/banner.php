<?php
require_once('session.php');
$users = $u['user'];
$content = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['deskripsi']));
$status = mysqli_real_escape_string($conn, $_POST['status']);
$join_date = date('Y-m-d');
$kode = date('YmdHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi  = $explode[count($explode) - 1];
$newname = 'brand_' . $status . '.' . $extensi;
$upload_dir = "../../upload/banner/";
if ($_FILES['image']['size'] <= 2048000) {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "UPDATE `tb_banner` SET `image` = '$newname', `content` = '$content', `status` = '$status' WHERE cuid = 1") or die(mysqli_error($conn));
            header('location:../banner/?notif=1');
        } else {
            header('location:../banner/?notif=3');
        }
    } else {
        $query = mysqli_query($conn, "UPDATE `tb_banner` SET `content` = '$content', `status` = '$status' WHERE cuid = 1") or die(mysqli_error($conn));
        header('location:../banner/?notif=1');
    }
} else if ($_FILES['image']['size'] >= 2048000 || $_FILES['image']['size'] == 0) {
    header('location:../banner/?notif=2');
}
