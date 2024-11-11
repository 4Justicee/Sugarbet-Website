<?php
require_once('session.php');

$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
$twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
$linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
$youtube = mysqli_real_escape_string($conn, $_POST['youtube']);
$query = mysqli_query($conn, "UPDATE `tb_social` SET `facebook` = '$facebook',
	`twitter` = '$twitter',
	`instagram` = '$instagram',
	`linkedin` = '$linkedin',
	`youtube` = '$youtube'
	WHERE cuid = 1") or die(mysqli_error($conn));
header('location:../social/?notif=1');
