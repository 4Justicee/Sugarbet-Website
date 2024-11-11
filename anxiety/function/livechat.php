<?php
require_once('session.php');

$lc_js = str_replace(array("   ", "'", '"'), "&apos;", $_POST['lc_js']);
$lc_mobile = mysqli_real_escape_string($conn, $_POST['lc_mobile']);

$query = mysqli_query($conn, "UPDATE `tb_livechat` SET `lc_js` = '$lc_js', `lc_mobile` = '$lc_mobile' WHERE cuid = 1") or die(mysqli_error($conn));
header('location:../livechat/?notif=1');
