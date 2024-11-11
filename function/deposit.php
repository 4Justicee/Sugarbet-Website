<?php
require_once('session.php');
include('../classes/class.phpmailer.php');

$metode = mysqli_real_escape_string($conn, $_POST['metode']);
$nominal = preg_replace('/[^A-Za-z0-9\-]/', '', mysqli_real_escape_string($conn, $_POST['nominal']));
$pay_from = mysqli_real_escape_string($conn, $_POST['pay_from']);
$catatan = mysqli_real_escape_string($conn, $_POST['catatan']);
$gameid = mysqli_real_escape_string($conn, $_POST['gameid']);
$postID = mysqli_real_escape_string($conn, $_POST['postID']);

$unik = date('Hs');
$kode_unik = substr(str_shuffle(1234567890), 0, 2);
$kd_transaksi = date('Ymds') . $kode_unik;
$totalBayar = $nominal + $kode_unik;
$created_date = date('Y-m-d H:i:s');

if ($catatan == '') {
    $note = 'no-photo.webp';
} else {
    $note = $catatan;
}

$cekTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$postID' AND jenis IN (1,2) AND (transaksi = 'Top Up' OR transaksi = 'Penarikan') AND status = 0") or die(mysqli_error($conn));
$ct = mysqli_num_rows($cekTransaksi);

if (isset($_POST['submit'])) {
    if ($nominal < $mindepo) {
        header('Location:' . $urldomain . '/deposit?notif=1');
        exit();
    } elseif ($nominal > $maxdepo) {
        header('Location:' . $urldomain . '/deposit?notif=2');
        exit();
    } elseif ($ct > 0) {
        header('Location:' . $urldomain . '/deposit?notif=4');
        exit();
    } else {
        $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$created_date','Top Up','$totalBayar',0, '$note', '$gameid', '0','1','$metode','$pay_from','$postID',0)") or die(mysqli_error($conn));

        //Jika ada promo
        if ($gameid != '') {
            $sql_transaksi = mysqli_query($conn, "SELECT * FROM `tb_post` WHERE cuid = '$gameid'") or die(mysqli_error($conn));
            $st = mysqli_fetch_array($sql_transaksi);
            $jml_to = $st['min_to'];
            $max_bonus = $st['max_bonus'];
            $persen = $st['persen'] / 100;
            $bonusnya = $nominal * $persen;
            $bonuse = round($bonusnya);
            if ($bonuse > $max_bonus) {
                $bonusDepo = $max_bonus;
            } else {
                $bonusDepo = $bonuse;
            }
            $totalTO = ($nominal + $bonusDepo) * $jml_to;
            $insertTO = mysqli_query($conn, "INSERT INTO `tb_turnover` (`userID`, `trxID`, `depo`, `bonus`, `jmlh_to`, `total_to`, `sisa_to`, `status`) VALUES ('$postID','$kd_transaksi','$nominal','$bonusDepo','$jml_to','$totalTO','$totalTO',0)") or die(mysqli_error($conn));
        }

        //Notif email
        $subject = 'Member Deposit ' . str_replace(array('https://', 'http://'), '', $urldomain);
        $messages = '
        <html>
        <body>
        <div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
        <img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
        <p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
        <hr style="margin-bottom: 15px;">
        <p>Halo <b>Admin</b>, terdapat permintaan deposit di ' . str_replace(array('https://', 'http://'), '', $urldomain) . '.</p>
        <hr style="margin-bottom: 15px;">
        <p>Transaksi: Deposit</p>
        <p>Jumlah: ' . $nominal . '</p>
        <p>Status: <a href="' . $urladmin . '" target="_blank">Lihat disini</a></p>
        <hr style="border: 1px solid #eaeaea;">
        </div>
        </body>
        </html>
        ';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPSecure = $config['mail']['enkripsi'];
        $mail->Host = $config['mail']['host'];
        $mail->SMTPDebug = false;
        $mail->Port = $config['mail']['port'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['mail']['username'];
        $mail->Password = $config['mail']['password'];
        $mail->SetFrom($config['mail']['username'], str_replace(array('https://', 'http://'), '', $urldomain));
        $mail->addReplyTo($emailutama, str_replace(array('https://', 'http://'), '', $urldomain));
        $mail->Subject = $subject;
        $mail->AddAddress($emailutama, str_replace(array('https://', 'http://'), '', $urldomain));
        $mail->MsgHTML($messages);
        $mail->Send();
        sleep(2);

        header('Location:' . $urldomain . '/payment?trxID=' . $kd_transaksi);
        exit();
    }
}
