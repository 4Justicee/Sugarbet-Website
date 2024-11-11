<?php


require_once('session.php');
$useridnya = $u['cuid'];

$kode_unik = substr(str_shuffle(1234567890), 0, 3);
$kd_transaksi = date('Ymds') . $kode_unik;
$requestID = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz123456789'), 0, 8);

$created_date = date('Y-m-d H:i:s');
$saldoAktif = $s3['balance'];

$pid = $_POST['pid'];
$getPasaran = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE cuid = '$pid'") or die(mysqli_error($conn));
$gp = mysqli_fetch_array($getPasaran);
$kodenya = $gp['code'];
$getPeriode = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY no DESC LIMIT 1") or die(mysqli_error($conn));
$gppp = mysqli_num_rows($getPeriode);
if ($gppp == 0) {
	$periode = 1;
} else {
	$gpp = mysqli_fetch_array($getPeriode);
	$periode = $gpp['no'] + 1;
}
$subtotal = 0;
for ($a = 1; $a <= 10; $a++) {
	$nominal = $_POST['nominal' . $i];
	$subtotal += $nominal;
}

if ($saldoAktif < $subtotal) {
	header('location:' . $urldomain . '/taruhan?pid=' . $pid . '&gameid=9&notif=1');
	exit();
} else {
	for ($i = 1; $i <= 10; $i++) {
		$angka = $_POST['angka' . $i];
		$nominal = $_POST['nominal' . $i];

		if ($nominal != '') {
			$getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 9 AND title = '$angka'") or die(mysqli_error($conn));
			$gg = mysqli_fetch_array($getGame);
			if ($gg['price'] < 0) {
				$bayar = $nominal - ($nominal * ($gg['price'] / 100));
				$menang = $gg['price'];
				$diskons = $bayar * ($gg['diskon'] / 100);
				$diskon = round($diskons);
				$totalBayar = $bayar - $diskon;
				$jumlahMenang = $nominal + $totalBayar;
			} else {
				$bayar = $nominal;
				$menang = $gg['price'];
				$diskons = $bayar * ($gg['diskon'] / 100);
				$diskon = round($diskons);
				$totalBayar = $bayar - $diskon;
				$jumlahMenang = $nominal + $totalBayar + ($nominal * ($gg['price'] / 100));
			}
			$insert_taruhan = mysqli_query($conn, "INSERT INTO `tb_taruhan` (`userID`, `pid`, `gameid`, `code`, `periode`, `created_date`, `tebak`, `posisi`, `nominal`, `menang`, `diskon`, `bayar`, `jumlah`, `keterangan`, `status`) VALUES ('$useridnya', '$pid', 9, '$kodenya', '$periode', '$created_date', '$angka', 'TENGAH', '$nominal', '$menang', '$diskon', '$totalBayar', '$jumlahMenang', '', 0)") or die(mysqli_error($conn));
			$insert_transaksi = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$created_date','Taruhan','$totalBayar',0, 'Taruhan $posisi $angka', '', '9','9','0','0','$useridnya',1)") or die(mysqli_error($conn));
			$updateBalance = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` - '$totalBayar' WHERE userID = '$useridnya'") or die(mysqli_error($conn));
			$getDataUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `cuid` = '$useridnya'");
			$fetchUser = mysqli_fetch_array($fiversUser);
			$fiversUser = $fetchUser['user'];
			$trxUserWd = json_decode($WL->transaksi($fiversUser, 'user_withdraw', $totalBayar), true);
			$update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` + '$totalBayar' WHERE cuid = '1'") or die(mysqli_error($conn));
		}
	}
	header('location:' . $urldomain . '/history-togel');
	exit();
}
