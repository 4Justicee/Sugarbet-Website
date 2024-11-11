<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');
include('../classes/class.phpmailer.php');

$token = session_id();
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);
$urldomain = $urldomain;

$email = mysqli_real_escape_string($conn, $_POST['email']);

if (isset($_POST['submit'])) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:' . $urldomain . '/forgot?notif=4');
        exit();
    } else {
        $cekuser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE email = '$email'") or die(mysqli_error($conn));
        $cu = mysqli_num_rows($cekuser);
        $cus = mysqli_fetch_array($cekuser);
        $full_name = $cus['full_name'];
        $explode = explode(' ', $cus['full_name']);
        $postID = $cus['id'];
        $re_pass = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz123456789'), 0, 8);
        $pass = password_hash($re_pass, PASSWORD_DEFAULT);

        if ($cu <= 0) {
            header('location:' . $urldomain . '/forgot?notif=1');
            exit();
        } else if ($cu >= 1) {
            if ($conn->query("UPDATE `tb_user` SET pass = '$pass' WHERE email = '$email'") == true) {

                //Notif email
                $subject = 'Reset Password ' . $app_name . ' Berhasil';
                $messages = '
                <html>
                <body>
                <div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
                <img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
                <p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
                <hr style="margin-bottom: 15px;">
                <p>Halo <b>' . $full_name . '</b>, kamu telah melakukan Reset Password. Berikut adalah password sementara:</p>
                <hr style="margin-bottom: 15px;">
                <p>Username: ' . $cus['user'] . '</p>
                <p>Password: ' . $re_pass . '</p>
                <p style="text-align: left !important;">
                    Silahkan login menggunakan password diatas, dan lakukan perubahan Password melalui pengaturan akun. Login akun di <a href="' . $urldomain . '/login" target="_blank">' . $app_name . '</a>
                </p>
                <p style="text-align: left !important;">
                    Terima Kasih<br>
                    - ' . $app_name . ' & Team.
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
                $mail->SetFrom($config['mail']['username'], "Reset Password");
                $mail->addReplyTo($emailutama, str_replace(array('https://', 'http://'), '', $urldomain));
                $mail->Subject = $subject;
                $mail->AddAddress($email, $full_name);
                $mail->MsgHTML($messages);
                $mail->Send();
                sleep(2);

                header('location:' . $urldomain . '/forgot?notif=2');
                exit();
            } else {
                header('location:' . $urldomain . '/forgot?notif=3');
                exit();
            }
        } else {
            header('location:' . $urldomain . '/forgot?notif=3');
            exit();
        }
    }
}
