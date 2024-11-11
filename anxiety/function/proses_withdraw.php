<?php
require_once('session.php');
include('../../classes/class.phpmailer.php');

$id = $_GET['cuid'];
$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE cuid = '$id'") or die(mysqli_error($conn));
$s1 = mysqli_fetch_array($sql_1);
$usersID = $s1['userID'];
$amounts = $s1['total'];

$getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
$gu = mysqli_fetch_array($getUser);
$emailnya = $gu['email'];
$usernya = $gu['user'];
$namanya = $gu['full_name'];

if ($s1['status'] == 0) {
    //Konfirmasi Withdraw
    $update = mysqli_query($conn, "UPDATE `tb_transaksi` SET `status` = 1 WHERE `cuid` = '$id'") or die(mysqli_error($conn));
    $updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `pending` = `pending` - '$amounts', `payout` = `payout` + '$amounts' WHERE `userID` = '$usersID'") or die(mysqli_error($conn));
    $update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` + '$amounts' WHERE cuid = '1'") or die(mysqli_error($conn));

    //Notif email
    $subject = 'Withdraw ' . str_replace(array('https://', 'http://'), '', $urldomain) . ' Berhasil';
    $messages = '
    <html>
    <body>
    <div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
    <img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
    <p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
    <hr style="margin-bottom: 15px;">
    <p>Halo <b>' . $namanya . '</b>, kami telah melakukan pembayaran pada akun ' . $usernya . '.</p>
    <hr style="margin-bottom: 15px;">
    <p>Transaksi: Withdraw</p>
    <p>Jumlah: ' . $amounts . '</p>
    <p>Status: <a href="' . $urldomain . '/history?notif=3" target="_blank">Lihat disini</a> atau di ' . $urldomain . '/history?notif=3</p>
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
    sleep(2);

    header('location:../withdraw/');
    exit();
} else {
    header('location:../withdraw/');
    exit();
}
