<?php
require_once('session.php');
$users = $u['user'];
$title = mysqli_real_escape_string($conn, $_POST['instansi']);
$keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
$deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
$coin = mysqli_real_escape_string($conn, $_POST['coin']);
$warnadasar = mysqli_real_escape_string($conn, $_POST['warnadasar']);
$warnahover = mysqli_real_escape_string($conn, $_POST['warnahover']);
$warnabg = mysqli_real_escape_string($conn, $_POST['warnabg']);
$urlweb = mysqli_real_escape_string($conn, $_POST['urlweb']);
$fontweb = str_replace(' ', '+', $urlweb);
$statusfooter = mysqli_real_escape_string($conn, $_POST['stfooter']);
$minrt = mysqli_real_escape_string($conn, $_POST['minrtp']);
$maxrt = mysqli_real_escape_string($conn, $_POST['maxrtp']);
$vemail = mysqli_real_escape_string($conn, $_POST['vemail']);
$vrek = mysqli_real_escape_string($conn, $_POST['vrek']);
$sinkdepo = mysqli_real_escape_string($conn, $_POST['sinkdepo']);

$bonusregister = mysqli_real_escape_string($conn, $_POST['bonusregister']);
$mindepo = mysqli_real_escape_string($conn, $_POST['mindepo']);
$maxdepo = mysqli_real_escape_string($conn, $_POST['maxdepo']);
$minwede = mysqli_real_escape_string($conn, $_POST['minwede']);
$maxwede = mysqli_real_escape_string($conn, $_POST['maxwede']);
$komaff = mysqli_real_escape_string($conn, $_POST['komaff']);
$maxkomaff = mysqli_real_escape_string($conn, $_POST['maxkomaff']);
$komrolling = mysqli_real_escape_string($conn, $_POST['komrolling']);
$maxkomrolling = mysqli_real_escape_string($conn, $_POST['maxkomrolling']);
$komcashback = mysqli_real_escape_string($conn, $_POST['komcashback']);
$maxkomcashback = mysqli_real_escape_string($conn, $_POST['maxkomcashback']);
$haribonus = mysqli_real_escape_string($conn, $_POST['haribonus']);

$ratepulsa = mysqli_real_escape_string($conn, $_POST['ratepulsa']);
$rateusd = mysqli_real_escape_string($conn, $_POST['rateusd']);
$rateusdt = mysqli_real_escape_string($conn, $_POST['rateusdt']);
$rateethereum = mysqli_real_escape_string($conn, $_POST['rateethereum']);
$ratebitcoin = mysqli_real_escape_string($conn, $_POST['ratebitcoin']);
$ratewdpulsa = mysqli_real_escape_string($conn, $_POST['ratewdpulsa']);
$ratewdusd = mysqli_real_escape_string($conn, $_POST['ratewdusd']);
$ratewdusdt = mysqli_real_escape_string($conn, $_POST['ratewdusdt']);
$ratewdethereum = mysqli_real_escape_string($conn, $_POST['ratewdethereum']);
$ratewdbitcoin = mysqli_real_escape_string($conn, $_POST['ratewdbitcoin']);

$date = date('Y-m-d H:i:s');
$kode = date('YdmHis');
$tipe_gambar = array('image/jpg', 'image/JPG', 'image/jpeg', 'image/bmp', 'image/x-png', 'image/png', 'image/PNG', 'image/webp', 'image/gif');
$gbr = $_FILES['image']['name'];
$ukuran = $_FILES['image']['size'];
$tipe = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$explode = explode('.', $gbr);
$extensi  = $explode[count($explode) - 1];
$newname = 'logo.' . $extensi;
$favicon = $_FILES['favicon']['name'];
$explodes = explode('.', $favicon);
$extensis  = $explode[count($explodes) - 1];
$newnames = 'favicon.png';
$upload_dir = "../../upload/";

//Identitas Web
if (isset($_POST['submit'])) {
    if ($_FILES['image']['size'] <= 2048000) {
        if ($gbr != "" && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newname);
                move_uploaded_file($_FILES['favicon']['tmp_name'], $upload_dir . $newnames);
                $query = mysqli_query($conn, "UPDATE `tb_seo` SET `image` = '$newname', `instansi` = '$title', `keyword` = '$keyword', `deskripsi` ='$deskripsi', `coin` ='$coin' WHERE cuid = 1") or die(mysqli_error($conn));
                header('location:../setting/?notif=1#identitas');
                exit();
            } else {
                header('location:../setting/?notif=3#identitas');
                exit();
            }
        } else {
            move_uploaded_file($_FILES['favicon']['tmp_name'], $upload_dir . $newnames);
            $query = mysqli_query($conn, "UPDATE `tb_seo` SET `instansi` = '$title', `keyword` = '$keyword', `deskripsi` ='$deskripsi', `coin` ='$coin' WHERE cuid = 1") or die(mysqli_error($conn));
            header('location:../setting/?notif=1#identitas');
            exit();
        }
    } else if ($_FILES['image']['size'] >= 2048000 || $_FILES['image']['size'] == 0) {
        header('location:../setting/?notif=2#identitas');
        exit();
    }
    //Warna Custom
} else if (isset($_POST['custom'])) {
    $query = mysqli_query($conn, "UPDATE `tb_seo` SET `warnadasar` = '$warnadasar', `warnahover` = '$warnahover', `warnabg` = '$warnabg', `urlweb` = '$fontweb' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../template/?notif=1');
    exit();
    //Status Footer
} else if (isset($_POST['statusfooter'])) {
    $query = mysqli_query($conn, "UPDATE `tb_seo` SET `statusfooter` = '$statusfooter' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../setting/#pengunguman');
    exit();
    //RTP Random
} else if (isset($_POST['rtp'])) {
    $query = mysqli_query($conn, "UPDATE `tb_seo` SET `minrtp` = '$minrt', `maxrtp` = '$maxrt' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../setting/#rtp');
    exit();
    //Sistem Member
} else if (isset($_POST['member'])) {
    $query = mysqli_query($conn, "UPDATE `tb_seo` SET `vemail` = '$vemail', `vrek` = '$vrek', `sinkdepo` = '$sinkdepo' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../setting/#member');
    exit();
    //Bonus
} else if (isset($_POST['bonus'])) {
    $query = mysqli_query($conn, "UPDATE `tb_admin` SET `bonusregister` = '$bonusregister', `mindepo` = '$mindepo', `maxdepo` = '$maxdepo', `minwede` = '$minwede', `maxwede` = '$maxwede', `komaff` = '$komaff', `maxkomaff` = '$maxkomaff', `komrolling` = '$komrolling', `maxkomrolling` = '$maxkomrolling', `komcashback` = '$komcashback', `maxkomcashback` = '$maxkomcashback', `haribonus` = '$haribonus' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../setting/#bonus');
    exit();
    //Rate Depo
} else if (isset($_POST['deposit'])) {
    $query = mysqli_query($conn, "UPDATE `tb_admin` SET `ratepulsa` = '$ratepulsa', `rateusd` = '$rateusd', `rateethereum` = '$rateethereum', `ratebitcoin` = '$ratebitcoin' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../rate/#deposit');
    exit();
    //Rate Wede
} else if (isset($_POST['withdraw'])) {
    $query = mysqli_query($conn, "UPDATE `tb_admin` SET `ratewdpulsa` = '$ratewdpulsa', `ratewdusd` = '$ratewdusd', `ratewdusdt` = '$ratewdusdt', `ratewdethereum` = '$ratewdethereum', `ratewdbitcoin` = '$ratewdbitcoin' WHERE cuid = 1") or die(mysqli_error($conn));
    header('location:../rate/#withdraw');
    exit();
} else {
    header('location:../setting/');
    exit();
}
