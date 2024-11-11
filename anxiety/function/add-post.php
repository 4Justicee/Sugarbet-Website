<?php
require_once('session.php');
$users = $u['user'];
$author = $u['full_name'];
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$date = date('Y-m-d');
$kode = date('YdmHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi  = $explode[count($explode) - 1];
$newname = 'blog_' . $kode . '.' . $extensi;
$upload_dir = "../../upload/blog/";
if ($postID == '') {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "INSERT INTO `tb_post` (`slug`, `title`, `persen`, `min_to`, `max_bonus`, `satuan`, `image`, `content`, `author`, `kategori`, `created_date`, `last_update`, `user`, `status`) VALUES ('','','','','','','$newname','','$author','5','$date','$date','$users', 1)") or die(mysqli_error($conn));
            header('location:../post/?do=add&notif=1');
        } else {
            header('location:../post/?do=add&notif=3');
        }
    } else {
        header('location:../post/?do=add&notif=4');
    }
} else {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "UPDATE `tb_post` SET `image` = '$newname', `author` = '$author', `last_update` = '$date', `user` = '$users', `status` = '$status' WHERE cuid = '$postID'") or die(mysqli_error($conn));
            header('location:../post/?do=add&postID=' . $postID . '&notif=1');
        } else {
            header('location:../post/?do=add&postID=' . $postID . '&notif=3');
        }
    } else {
        header('location:../post/?do=add&postID=' . $postID . '&notif=4');
    }
}
