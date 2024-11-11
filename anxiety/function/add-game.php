<?php
require_once('session.php');

$users = $u['user'];
$titles = str_replace(array("   ", "'"), "&apos;", mysqli_real_escape_string($conn, $_POST['title']));
$title = strtoupper($titles);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$satuan = mysqli_real_escape_string($conn, $_POST['satuan']);
$diskon = mysqli_real_escape_string($conn, $_POST['diskon']);
$minBet = mysqli_real_escape_string($conn, $_POST['min_bet']);
$maxBet = mysqli_real_escape_string($conn, $_POST['max_bet']);
$parents = mysqli_real_escape_string($conn, $_POST['parent']);
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$date = date('Y-m-d');
$kode = date('YdmHis');
if ($postID == '') {
    $query = mysqli_query($conn, "INSERT INTO `tb_game` (`title`, `price`, `diskon`, `min_bet`, `max_bet`, `satuan`, `parent`, `status`) VALUES ('$title', '$price', '$diskon', '$minBet', '$maxBet', '$satuan', '$parents', 0)") or die(mysqli_error($conn));
    header('location:../game/?notif=1');
} else {
    $query = mysqli_query($conn, "UPDATE `tb_game` SET `title` = '$title', `price` = '$price', `diskon` = '$diskon', `min_bet` = '$minBet', `max_bet` = '$maxBet', `satuan` = '$satuan', `parent` = '$parents' WHERE cuid = '$postID'") or die(mysqli_error($conn));
    header('location:../game/?postID=' . $postID . '&notif=1');
}
