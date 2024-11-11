<?php
require_once('session.php');
$id = $_GET['cuid'];

if ($id == 1 or $id == 2 or $id == 3 or $id == 4 or $id == 5 or $id == 6 or $id == 7 or $id == 8 or $id == 9 or $id == 10 or $id == 11 or $id == 12 or $id == 13 or $id == 14 or $id == 15 or $id == 16 or $id == 17 or $id == 18 or $id == 19 or $id == 20 or $id == 21 or $id == 22 or $id == 23) {
    header('location:../bank/?notif=5');
    exit();
} else {
    $query = mysqli_query($conn, "DELETE FROM `tb_bank` WHERE cuid = '$id'") or die(mysqli_error($conn));
    header('location:../bank/?notif=6');
    exit();
}
