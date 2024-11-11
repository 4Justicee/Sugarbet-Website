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

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$usere = strtolower($_POST['user']);
$useree = mysqli_real_escape_string($conn, $usere);
$user = str_replace(' ', '', $useree);
$acaktext = acaktext();
$acakstring = acakstring();
$extplayer = $acaktext . $user . $acakstring;
$email = mysqli_real_escape_string($conn, $_POST['email']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$akun = mysqli_real_escape_string($conn, $_POST['akun']);
$no_rek = mysqli_real_escape_string($conn, $_POST['no_rek']);
$level = 'user';
$join_date = date('Y-m-d H:i:s');

if ($verifreg == '0') {
	$passtext = $_POST['pass'];
	$pass = password_hash($passtext, PASSWORD_DEFAULT);
} else {
	$passtext = acak(10);
	$pass = password_hash($passtext, PASSWORD_DEFAULT);
}

$cekusere = mysqli_query($conn, "SELECT * FROM `tb_user` ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
$cus = mysqli_fetch_array($cekusere);
$cuid = $cus['cuid'] + 1;
$useridd = '1' . date('dmy') . $cuid;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header('location:' . $urldomain . '/register?notif=6');
	exit();
} else if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
	header('location:' . $urldomain . '/register?notif=9');
	exit();
} else if (!preg_match('/^[0-9]{9,13}+$/', $no_hp)) {
	header('location:' . $urldomain . '/register?notif=7');
	exit();
} else {
	$cekUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$user'") or die(mysqli_error($conn));
	$q = mysqli_num_rows($cekUser);
	if ($q > 0) {
		header('location:' . $urldomain . '/register?notif=2');
	} else {
		$cekEmail = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE email = '$email'") or die(mysqli_error($conn));
		$qq = mysqli_num_rows($cekEmail);
		if ($qq > 0) {
			header('location:' . $urldomain . '/register?notif=3');
		} else {
			$cekHp = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE no_hp = '$no_hp'") or die(mysqli_error($conn));
			$qqq = mysqli_num_rows($cekHp);
			if ($qqq > 0) {
				header('location:' . $urldomain . '/register?notif=4');
			} else {
				$cekRekening = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE no_rek = '$no_rek'") or die(mysqli_error($conn));
				$qqqq = mysqli_num_rows($cekRekening);
				if ($qqqq > 0) {
					header('location:' . $urldomain . '/register?notif=5');
				} else {
					if ($_POST['sponsor'] == '') {
						$uplineID = 1;
					} else {
						$upline = mysqli_real_escape_string($conn, $_POST['sponsor']);
						$cekUpline = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$upline'") or die(mysqli_error($conn));
						$cu = mysqli_num_rows($cekUpline);
						if ($cu > 0) {
							$cuu = mysqli_fetch_array($cekUpline);
							$uplineID = $cuu['cuid'];
						} else {
							$uplineID = 1;
						}
					}

					$saldoawal = 0 + $bonusregister;
					$fiversCreateUser = json_decode($WL->create($user), true);
					if ($fiversCreateUser['status'] == 1) {
						$query = mysqli_query($conn, "INSERT INTO `tb_user` (`userid`, `extplayer`, `user`, `pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `pinTrx`, `reff`, `uplineID`, `join_date`, `last_login`, `status`) VALUES ('0','$extplayer','$user', '$pass', '0', 'avatar.webp', '$full_name', '$email', '$no_hp', 'user', '', 0, '$uplineID', '$join_date', '$join_date', 1)") or die(mysqli_error($conn));
						$last_id = mysqli_insert_id($conn);
						$query2 = mysqli_query($conn, "INSERT INTO `tb_balance` (`userID`, `active`, `pending`, `transfer`, `payout`, `created_date`) VALUES ('$last_id', '$saldoawal', 0, 0, 0, '$join_date')") or die(mysqli_error($conn));
						$query3 = mysqli_query($conn, "INSERT INTO `tb_bank` (`image`, `akun`, `pemilik`, `no_rek`, `status`, `userID`) VALUES ('', '$akun', '$full_name', '$no_rek', 1, '$last_id')") or die(mysqli_error($conn));
						$update = mysqli_query($conn, "UPDATE `tb_user` SET reff = reff + 1 WHERE cuid = '$uplineID'") or die(mysqli_error($conn));
					} else {
						echo $fiversCreateUser['msg'];
						exit;
					}

					if ($bonusregister > 0) {
						$kode_unik = substr(str_shuffle(1234567890), 0, 3);
						$kd_transaksi = $kode_unik . date('Ymds');
						$insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi', '$join_date', 'Bonus Member', '$bonusregister', 0, 'Bonus New Member', '', '0', '8', '0', '0', '$cuid', 1)") or die(mysqli_error($conn));
					}
				}

				//Notif email
				if ($verifreg == '1') {
					$subject = 'Verifikasi Email & Klaim Bonus ' . $app_name . '';
					$messages = '
						<html>
						<body>
						<div style="max-width: 640px; font-family: Noto Sans, Roboto, sans-serif; font-size: 14px; padding: 10px; line-height: 1.5; border: #eaeaea solid 3px; border-radius: 7px; margin: 0 auto; text-align: left; ">
						<img class="text-center" src="' . $urldomain . '/upload/' . $s0['image'] . '" style="text-align: center; max-width: 150px; margin: 0 auto;border-radius: 8px;">
						<p>Website: <a href="' . $urldomain . '" target="_blank">' . $urldomain . '</a></p>
						<hr style="margin-bottom: 15px;">
						<p>Selamat datang di ' . $app_name . '. Gunakan data dibawah ini untuk login ke akun.</p>
						<hr style="margin-bottom: 15px;">
						<p>Email: ' . $email . '</p>
						<p>No HP: ' . $no_hp . '</p>
						<p>Username: ' . $user . '</p>
						<p>Password: ' . $passtext . '</p>
						<p style="text-align: left !important;">
						Anda dapat mengatur ulang di pengaturan akun. Login di <a href="' . $urldomain . '/login" target="_blank">' . $app_name . '</a>
						</p>
						<hr style="margin-bottom: 15px;">
						<p style="text-align: left !important;">
						Klaim bonus new member dan bonus deposit:<br>
						<li>Silahkan login di <a href="' . $urldomain . '/login" target="_blank">' . $app_name . '</a>.</li>
						<li>Buka halaman Promo, cek detail promo.</li>
						<li>Lalu klaim bonus yang tersedia.</li>
						<li>Dapatkan bonus member baru dan bonus deposit.</li>
						<li>Dapatkan kemenangan 3x lipat dari nominal deposit.</li>
						</p>
						<p style="text-align: left !important;">
						<b>Pasti Menang 3x Lipat</b> dengan pola 351, lakukan spin 50x 30x 10x (bet dan settingan bebas) berlaku hanya di situs ' . $app_name . '. Setelah itu kamu bisa langsung withdraw atau mengulangi pola yang sama.
						</p>
						<p style="text-align: left !important;">
						Terima Kasih<br>
						- ' . $app_name . ' & team.
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
					$mail->SetFrom($config['mail']['username'], $app_name);
					$mail->addReplyTo($emailutama, str_replace(array('https://', 'http://'), '', $urldomain));
					$mail->Subject = $subject;
					$mail->AddAddress($email, $full_name);
					$mail->MsgHTML($messages);
					$mail->Send();
					sleep(2);

					header('location:' . $urldomain . '/login?notif=7');
					exit();
				} else {
					header('location:' . $urldomain . '/login?notif=4');
					exit();
				}
			}
		}
	}
}
