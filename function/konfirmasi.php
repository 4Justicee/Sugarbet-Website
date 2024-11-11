<?php
require_once('session.php');
$trxID = mysqli_real_escape_string($conn, $_POST['trxID']);
$kode = date('YdmHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi = $explode[count($explode) - 1];
$filenameapp = str_replace(' ', '', $app_name);
$newname = 'bukti_' . $filenameapp . '_' . $trxID . '.' . $extensi;
$upload_dir = "../upload/bukti/";
$created_date = date('Y-m-d H:i:s');
if (isset($_POST['submit'])) {
    $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
    $s2 = mysqli_fetch_array($sql_2);
    if ($s2['status'] == 0) {
        if ($_FILES['image']['size'] <= 2048000) {
            if ($gbr !== "" && $error == 0) {
                if (in_array(strtolower($tipe), $tipe_gambar)) {
                    if ($buktitf == '1') {
                        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
                        $query = mysqli_query($conn, "UPDATE `tb_transaksi` SET `note` = '$newname' WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
                        header('Location:' . $urldomain . '/history?notif=1');
                        exit();
                    } else {
                        header('Location:' . $urldomain . '/history?notif=2');
                        exit();
                    }
                } else {
                    header('Location:' . $urldomain . '/history?notif=2');
                    exit();
                }
            } else if ($gbr == "" && $error !== 0) {
                header('Location:' . $urldomain . '/history?notif=4');
                exit();
            } else {
                header('Location:' . $urldomain . '/payment?trxID=' . $trxID . '&notif=1');
                exit();
            }
        } else if ($_FILES['image']['size'] >= 2048000 || $_FILES['image']['size'] == 0) {
            header('Location:' . $urldomain . '/payment?trxID=' . $trxID . '&notif=4#upload');
            exit();
        }
    } else {
        header('location:../deposit');
        exit();
    }
} else if (isset($_POST['cancel'])) {
    $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
    $s2 = mysqli_fetch_array($sql_2);
    $iniuser = $s2['userID'];
    if ($s2['status'] == 0) {
        $getTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE trxID = '$trxID'") or die(mysqli_error($conn));
        $goo = mysqli_num_rows($getTO);
        if ($goo = 0) {
            $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `kd_transaksi` = '$trxID'") or die(mysqli_error($conn));
        } else {
            $updates = mysqli_query($conn, "UPDATE `tb_turnover` SET `status` = 0 WHERE `trxID` = '$trxID'") or die(mysqli_error($conn));
            $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 2 WHERE `kd_transaksi` = '$trxID'") or die(mysqli_error($conn));
        }
        header('location:../deposit');
        exit();
    } else {
        header('location:../deposit');
        exit();
    }
} else {
    header('Location:' . $urldomain . '/history');
    exit();
}
