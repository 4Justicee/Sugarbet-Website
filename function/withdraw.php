<?php
require_once('session.php');
include('../classes/class.phpmailer.php');

$currentPass = $u['pass'];
$metode = mysqli_real_escape_string($conn, $_POST['metode']);
$nominal = preg_replace('/[^0-9\-]/', '', mysqli_real_escape_string($conn, $_POST['nominal']));
$usersID = mysqli_real_escape_string($conn, $_POST['userID']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$getDataUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `cuid` = '$usersID'");
$fetchUser = mysqli_fetch_array($getDataUser);
$fiversUser = $fetchUser['user'];

$getBank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = '$usersID'") or die(mysqli_error($conn));
$gb = mysqli_fetch_array($getBank);

$catatan = $gb['akun'] . ' ' . $gb['no_rek'] . ' A/n ' . $gb['pemilik'];

$cekBalance = json_decode($WL->getbalance($fiversUser), true);
$cb = $cekBalance['user_list'];
$saldoAktif = $cb[0]['balance'] + 0;

$unik = date('Hs');
$kode_unik = substr(str_shuffle(1234567890), 0, 3);
$kd_transaksi = date('Ymds') . $kode_unik;

$created_date = date('Y-m-d H:i:s');

$cekTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$usersID' AND jenis IN (1,2) AND (transaksi = 'Top Up' OR transaksi = 'Penarikan') AND status = 0") or die(mysqli_error($conn));
$ct = mysqli_num_rows($cekTransaksi);


//Check Deposit
$AmbilDepo = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE `kd_transaksi` = '$kodetransaksi' AND `userID` = '$useridto' AND `status` = 1 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$gdp = mysqli_fetch_array($AmbilDepo);
$startTurnover = date('Y-m-d H:i:s', $gdp['date']);
$startUsernya = $gdp['userID'];

//Hitung Turnover
$totalBet = mysqli_query($conn, "SELECT SUM(nominal) as nominal FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$startUsernya' AND `created_date` BETWEEN '$startTurnover' AND '$startDay'") or die(mysqli_error($conn));
$ttocek = mysqli_num_rows($totalBet);
$tto = mysqli_fetch_array($totalBet);

//Proses Turnover
if ($gto = 0) {
    $totalTOfixs = 0;
    $sisaTOfixs = 0;
} else {
    if ($ttocek = 0) {
        $totalTOfixs = $gtz['total_to'];
        $sisaTOfixs = $gtz['total_to'];
    } else {
        $totalTOfixs = $gtz['total_to'];
        $sisaTOfixs = $gtz['total_to'] - $tto['nominal'];
    }
}

//Hasil Turnover
if ($sisaTOfixs <= 0) {
    $ttohasil = $totalTOfixs;
    $tsohasil = 0;
} else if ($sisaTOfixs > 0) {
    $ttohasil = $totalTOfixs;
    $tsohasil = $sisaTOfixs;
} else {
    $ttohasil = 0;
    $tsohasil = 0;
}

if (isset($_POST['submit'])) {
    if (password_verify($password, $currentPass)) {
        if ($nominal < $minwede) {
            header('Location:' . $urldomain . '/withdraw?notif=2');
            exit();
        } elseif ($nominal > $maxwede) {
            header('Location:' . $urldomain . '/withdraw?notif=6');
            exit();
        } elseif ($saldoAktif < $nominal) {
            header('Location:' . $urldomain . '/withdraw?notif=4');
            exit();
        } elseif ($sisaTOfixs > 0) {
            header('Location:' . $urldomain . '/withdraw?notif=7');
            exit();
        } elseif ($ct > 0) {
            header('Location:' . $urldomain . '/withdraw?notif=5');
            exit();
        } else {
            $trxUserWd = json_decode($WL->transaksi($fiversUser, 'user_withdraw', $nominal), true);
            if ($trxUserWd['status'] == 1) {
                $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$created_date','Penarikan','$nominal',0, '$catatan', '', '0','2','$metode','0','$usersID',0)") or die(mysqli_error($conn));
                $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` - '$nominal', `pending` = pending + '$nominal' WHERE userID = '$usersID'") or die(mysqli_error($conn));
            } else {
                echo $trxUserWd['msg'];
                exit;
            }

            //Notif email
            $subject = 'Member Withdraw ' . str_replace(array('https://', 'http://'), '', $urldomain);
            $messages = '
            <html>
            <body>
            <div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
            <img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
            <p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
            <hr style="margin-bottom: 15px;">
            <p>Halo <b>Admin</b>, terdapat permintaan withdraw di ' . str_replace(array('https://', 'http://'), '', $urldomain) . '.</p>
            <hr style="margin-bottom: 15px;">
            <p>Transaksi: Withdraw</p>
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

            header('Location:' . $urldomain . '/payment-withdraw?trxID=' . $kd_transaksi);
            exit();
        }
    } else {
        header('location:' . $urldomain . '/withdraw?notif=3');
        exit();
    }
}
