<?php
require_once('session.php');
include('../../classes/class.phpmailer.php');

$id = $_GET['cuid'];
$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE cuid = '$id'") or die(mysqli_error($conn));
$s1 = mysqli_fetch_array($sql_1);
$usersID = $s1['userID'];
$amounts = $s1['total'];
$trxID = $s1['kd_transaksi'];

$getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
$gu = mysqli_fetch_array($getUser);
$emailnya = $gu['email'];
$usernya = $gu['user'];
$namanya = $gu['full_name'];

$uplineID = $gu['uplineID'];
$komisie = $amounts * $komaff;
$komisi = round($komisie);

$kode_unik = substr(str_shuffle(1234567890), 0, 3);
$kd_transaksi = date('Ymds') . $kode_unik;
$created_date = date('Y-m-d H:i:s');

if ($s1['status'] == 0) {
    $getTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE trxID = '$trxID'") or die(mysqli_error($conn));
    $goo = mysqli_num_rows($getTO);

    if ($goo = 0) {
        $totalBalance = $amounts;
        $trxUserDp = json_decode($WL->transaksi($usernya, 'user_deposit', $totalBalance), true);
        if ($trxUserDp['status'] == 1) {
            $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + '$totalBalance' WHERE `userID` = '$usersID'") or die(mysqli_error($conn));
            $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$totalBalance' WHERE cuid = '1'") or die(mysqli_error($conn));
        } else {
            echo $trxUserDp['msg'];
            exit;
        }
    } else {
        $go = mysqli_fetch_array($getTO);
        $bonus = $go['bonus'];
        $totalBalance = $amounts + $bonus;
        $trxUserDp = json_decode($WL->transaksi($usernya, 'user_deposit', $totalBalance), true);
        if ($trxUserDp['status'] == 1) {
            $updates = mysqli_query($conn, "UPDATE `tb_turnover` SET `status` = 1 WHERE `trxID` = '$trxID'") or die(mysqli_error($conn));
            $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + '$totalBalance' WHERE `userID` = '$usersID'") or die(mysqli_error($conn));
            $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$totalBalance' WHERE cuid = '1'") or die(mysqli_error($conn));
        } else {
            echo $trxUserDp['msg'];
            exit;
        }
    }
    sleep(1);

    //Bonus ke Upline
    $cekRef = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$uplineID' AND jenis = 3 AND pay_from = '$usersID' AND status = 1") or die(mysqli_error($conn));
    $cr = mysqli_num_rows($cekRef);
    if ($cr == 0) {
        $getPromotorID = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `cuid` = '$uplineID'");
        $fetchPromotor = mysqli_fetch_array($getPromotorID);
        $promotor = $fetchPromotor['user'];
        $trxUserDp = json_decode($WL->transaksi($promotor, 'user_deposit', $komisi), true);
        $insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi', '$created_date', 'Referral', '$komisi', 0, 'Bonus Referral', '', '0', '3', '0', '$usersID', '$uplineID', 1)") or die(mysqli_error($conn));
        $insert = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + '$komisi' WHERE `userID` = '$uplineID'") or die(mysqli_error($conn));
        $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$komisi' WHERE cuid = '1'") or die(mysqli_error($conn));
    }
    $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 1 WHERE `cuid` = '$id'") or die(mysqli_error($conn));
    sleep(1);

    //Notif email
    $subject = 'Deposit ' . str_replace(array('https://', 'http://'), '', $urldomain) . ' Berhasil';
    $messages = '
    <html>
    <body>
    <div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
    <img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
    <p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
    <hr style="margin-bottom: 15px;">
    <p>Halo <b>' . $namanya . '</b>, kami telah mengkonfirmasi pembayaran pada akun ' . $usernya . '.</p>
    <hr style="margin-bottom: 15px;">
    <p>Transaksi: Deposit</p>
    <p>Jumlah: ' . $totalBalance . '</p>
    <p>Status: <a href="' . $urldomain . '/history" target="_blank">Lihat disini</a> atau di ' . $urldomain . '/history</p>
    <p style="text-align: left !important;">
        <b>Pasti Menang 3x Lipat</b> dengan pola 351, lakukan spin 50x 30x 10x (bet dan settingan bebas) berlaku hanya di situs ' . str_replace(array('https://', 'http://'), '', $urldomain) . '. Setelah itu kamu bisa langsung withdraw atau mengulangi pola yang sama.
    </p>
    <p style="text-align: left !important;">
        Terima Kasih<br>
        - ' . str_replace(array('https://', 'http://'), '', $urldomain) . ' & team.
    </p>
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
    $mail->AddAddress($emailnya, $namanya);
    $mail->MsgHTML($messages);
    $mail->Send();
    sleep(1);

    header('location:../topup/');
    exit();
} else {
    header('location:../topup/');
    exit();
}
