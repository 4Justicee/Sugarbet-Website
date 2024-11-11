<?php
require_once('session.php');
$users = $u['user'];
$author = $u['full_name'];
$title = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['title']));
$slugs = preg_replace("/[^a-zA-Z0-9]/", "-", $title);
$slug = strtolower($slugs);
$content = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['content']));
$persen = mysqli_real_escape_string($conn, $_POST['persen']);
$min_to = mysqli_real_escape_string($conn, $_POST['min_to']);
$max_bonus = mysqli_real_escape_string($conn, $_POST['max_bonus']);
$satuan = mysqli_real_escape_string($conn, $_POST['satuan']);
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
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
            $query = mysqli_query($conn, "INSERT INTO `tb_post` (`slug`, `title`, `persen`, `min_to`, `max_bonus`, `satuan`, `image`, `content`, `author`, `kategori`, `created_date`, `last_update`, `user`, `status`) VALUES ('$slug','$title','$persen','$min_to','$max_bonus','$satuan','$newname','$content','$author','$kategori','$date','$date','$users', 1)") or die(mysqli_error($conn));
            header('location:../promo/?do=add&notif=1');
            exit();
        } else {
            header('location:../promo/?do=add&notif=3');
            exit();
        }
    } else {
        $query = mysqli_query($conn, "INSERT INTO `tb_post` (`slug`, `title`, `persen`, `min_to`, `max_bonus`, `satuan`, `image`, `content`, `author`, `kategori`, `created_date`, `last_update`, `user`, `status`) VALUES ('$slug','$title','$persen','$min_to','$max_bonus','$satuan','no-photo.webp','$content','$author','$kategori','$date','$date','$users', 1)") or die(mysqli_error($conn));
        header('location:../promo/?do=add&notif=1');
        exit();
    }
} else {
    if ($gbr !== "" && $error == 0) {
        if (in_array(strtolower($tipe), $tipe_gambar)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
            $query = mysqli_query($conn, "UPDATE `tb_post` SET `slug` = '$slug', `title` = '$title', `persen` = '$persen', `min_to` = '$min_to', `max_bonus` = '$max_bonus', `satuan` = '$satuan', `image` = '$newname', `content` = '$content', `author` = '$author', `kategori` = '$kategori', `last_update` = '$date', `user` = '$users' WHERE cuid = '$postID'") or die(mysqli_error($conn));
            header('location:../promo/?do=add&postID=' . $postID . '&notif=1');
            exit();
        } else {
            header('location:../promo/?do=add&postID=' . $postID . '&notif=3');
            exit();
        }
    } else {
        $query = mysqli_query($conn, "UPDATE `tb_post` SET `slug` = '$slug', `title` = '$title', `persen` = '$persen', `min_to` = '$min_to', `max_bonus` = '$max_bonus', `satuan` = '$satuan', `content` = '$content', `author` = '$author', `kategori` = '$kategori', `last_update` = '$date', `user` = '$users' WHERE cuid = '$postID'") or die(mysqli_error($conn));
        header('location:../promo/?do=add&postID=' . $postID . '&notif=1');
        exit();
    }
}
