<?php
require_once('session.php');
$adminid = $u['user'];
if ($_POST) {
    $data = array('?php', 'select * from', 'join', 'inner join', 'left join', 'where = ', 'where=', 'disctint', 'union', '<script>', '</script>');
    $ipaddress = mysqli_real_escape_string($conn, $_POST['ipaddress']);
    $sessionid = mysqli_real_escape_string($conn, $_POST['sessionid']);
    $content = strtolower(mysqli_real_escape_string($conn, $_POST['content']));
    $newdesk = str_replace($data, "", $content);
    $date = date('Y-m-d H:i:s');
    sleep(2);
    $updateChat = mysqli_query($conn, "UPDATE `tb_chat` SET adminid = '$adminid', status = 1 WHERE sessionid = '$sessionid'") or die(mysqli_error($conn));
    $updateChat = mysqli_query($conn, "UPDATE `tb_chat_respon` SET status = 1 WHERE sessionid = '$sessionid'") or die(mysqli_error($conn));
    $cekChat = mysqli_query($conn, "SELECT * FROM `tb_chat` WHERE sessionid = '$sessionid'") or die(mysqli_error($conn));
    $cc = mysqli_fetch_array($cekChat);
    $userid = $cc['userid'];
    $insert_chat = mysqli_query($conn, "INSERT INTO `tb_chat_respon` (`sessionid`, `ipaddress`, `userid`, `content`, `jenis`, `created_date`, `status`) VALUES ('$sessionid','$ipaddress', '$adminid','$newdesk',0,'$date', 1)") or die(mysqli_error($conn));
}
