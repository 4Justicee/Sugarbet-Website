<?php
require_once('session.php');
$id = $_GET['cuid'];
$query = mysqli_query($conn, "DELETE FROM `tb_pasaran` WHERE cuid = '$id'") or die(mysqli_error($conn));
header('location:../pasaran/');