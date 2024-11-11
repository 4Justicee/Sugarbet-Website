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
$jumlah = COUNT($_POST['angka']);
$total = $_POST['nominal'];
$subtotal = array_sum($total);

if ($saldoAktif < $subtotal) {
	header('location:' . $urldomain . '/taruhan?pid=' . $pid . '&gameid=7&notif=1');
	exit();
} else {
	for ($i = 0; $i < $jumlah; $i++) {
		$angka = $_POST['angka'][$i];
		$nominal = $_POST['nominal'][$i];
		$posisi = '3D'; //COLOK NAGA
		$getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE title = '$posisi'") or die(mysqli_error($conn));
		$gg = mysqli_fetch_array($getGame);
		$menang = $gg['price'];
		$potongan = $gg['diskon'];
		$diskons = ($nominal * $potongan) / 100;
		$diskon = round($diskons);
		$totalBayar = $nominal - $diskon;
		$jumlahMenang = ($menang * $nominal) + $totalBayar;
		if ($angka != '') {
			$insert_taruhan = mysqli_query($conn, "INSERT INTO `tb_taruhan` (`userID`, `pid`, `gameid`, `code`, `periode`, `created_date`, `tebak`, `posisi`, `nominal`, `menang`, `diskon`, `bayar`, `jumlah`, `keterangan`, `status`) VALUES ('$useridnya', '$pid', 1, '$kodenya', '$periode', '$created_date', '$angka', '$posisi', '$nominal', '$menang', '$diskon', '$totalBayar', '$jumlahMenang', '', 0)") or die(mysqli_error($conn));
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
