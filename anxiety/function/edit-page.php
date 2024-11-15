<?php
require_once('session.php');

$users = $u['user'];
$title = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['title']));
$slugs = preg_replace("/[^a-zA-Z0-9]/", "-", $title);
$slug = strtolower($slugs);
$content = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['content']));
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$date = date('Y-m-d');
$kode = date('YdmHis');

if ($postID == '') {
	$query = mysqli_query($conn, "INSERT INTO `tb_page` (`slug`, `nama_page`, `content`, `image`, `video`, `created_date`, `last_update`, `user`) VALUES ('$slug', '$title', '$content', 'no-photo.webp', '', '$date', '$date', '$users')") or die(mysqli_error($conn));
	header('location:../page/?notif=1');
} else {
	$query = mysqli_query($conn, "UPDATE `tb_page` SET `slug` = '$slug', `nama_page` = '$title', `content` = '$content', `last_update` = '$date', `user` = '$users' WHERE cuid = '$postID'") or die(mysqli_error($conn));
	header('location:../page/?postID=' . $postID . '&notif=1');
}
