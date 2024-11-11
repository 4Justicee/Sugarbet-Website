<?php
require_once('session.php');
$users = $u['user'];
$footerdesc = mysqli_real_escape_string($conn, $_POST['footerdesc']);

$date = date('Y-m-d H:i:s');
$kode = date('YdmHis');

$query = mysqli_query($conn, "UPDATE `tb_seo` SET `footer` = '$footerdesc' WHERE cuid = 1") or die(mysqli_error($conn));
header('location:../setting/#footerdesc');
