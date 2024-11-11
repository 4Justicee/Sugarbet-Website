<?php
require_once('session.php');
$users = $u['user'];
$title = strtoupper(mysqli_real_escape_string($conn, $_POST['title']));
$kode = mysqli_real_escape_string($conn, $_POST['kode']);
$time_result = mysqli_real_escape_string($conn, $_POST['time_result']);
$time_open = mysqli_real_escape_string($conn, $_POST['time_open']);
$close_result = mysqli_real_escape_string($conn, $_POST['close_result']);
$step_periode = mysqli_real_escape_string($conn, $_POST['step_periode']);
$website = mysqli_real_escape_string($conn, $_POST['website']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$created_date = date('Y-m-d H:i:s');
if ($postID == '') {
    $query = mysqli_query($conn, "INSERT INTO `tb_pasaran` (`title`, `code`, `time_result`, `time_open`, `close_result`, `step_periode`, `website`, `status`) VALUES ('$title', '$kode','$time_result','$time_open','$close_result','$step_periode','$website','$status')") or die(mysqli_error($conn));
    header('location:../pasaran/?notif=1');
} else {
    $query = mysqli_query($conn, "UPDATE `tb_pasaran` SET `title` = '$title', `code` = '$kode', `time_result` = '$time_result', `time_open` = '$time_open', `close_result` = '$close_result', `step_periode` = '$step_periode', `website` = '$website', `status` = '$status' WHERE cuid = '$postID'") or die(mysqli_error($conn));
    header('location:../pasaran/?catID=' . $postID . '&notif=1');
}
