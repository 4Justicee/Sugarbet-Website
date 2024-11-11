<?php
require_once('session.php');
$statusnya = $_GET['status'];
$postID = $_GET['postID'];
$query = mysqli_query($conn, "UPDATE `tb_tripayapi` SET `status` = '$statusnya' WHERE cuid = '$postID'") or die(mysqli_error($conn));
header('location:../maintenance/');
