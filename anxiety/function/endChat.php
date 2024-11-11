<?php
require_once('session.php');
$id = $_GET['sessionid'];
$query = mysqli_query($conn, "DELETE FROM `tb_chat` WHERE sessionid LIKE '$id%'") or die(mysqli_error($conn));
$query = mysqli_query($conn, "DELETE FROM `tb_chat_respon` WHERE sessionid LIKE '$id%'") or die(mysqli_error($conn));
header('location:../chat/');
