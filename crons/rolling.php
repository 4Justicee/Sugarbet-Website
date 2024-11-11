<?php
ob_start();
if (!isset($_SESSION)) {
	session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$kode_unik = substr(str_shuffle(1234567890), 0, 3);
$kd_transaksi = date('Ymds') . $kode_unik;

if ($haribonus == '0') {
	$kodeharinya = 0;
	$namaharinya 	= 'Minggu';
	$nameofday 		= 'Sunday';
} elseif ($haribonus == '1') {
	$kodeharinya = 1;
	$namaharinya 	= 'Senin';
	$nameofday 		= 'Monday';
} elseif ($haribonus == '2') {
	$kodeharinya = 2;
	$namaharinya 	= 'Selasa';
	$nameofday 		= 'Tuesday';
} elseif ($haribonus == '3') {
	$kodeharinya = 3;
	$namaharinya 	= 'Rabu';
	$nameofday 		= 'Wednesday';
} elseif ($haribonus == '4') {
	$kodeharinya = 4;
	$namaharinya 	= 'Kamis';
	$nameofday 		= 'Thursday';
} elseif ($haribonus == '5') {
	$kodeharinya = 5;
	$namaharinya 	= 'Jumat';
	$nameofday 		= 'Friday';
} elseif ($haribonus == '6') {
	$kodeharinya = 6;
	$namaharinya 	= 'Sabtu';
	$nameofday 		= 'Saturday';
} else {
	$kodeharinya = '';
	$namaharinya = '';
	$nameofday = '';
}

$hari = date('l');
$today = date('Y-m-d H:i');
$tanggal = date('Y-m-d');
$weekly = date('Y-m-d H:i', strtotime('-7 day', strtotime($today)));

//BONUS ROLLING MINGGUAN
if ($komrolling == 0) {
	echo 'Bonus Rolling Mingguan Dinonaktifkan';
} else {
	$getTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE `userID` NOT IN(1,2) AND `jenis` = 6 AND `status` = 1 AND `date` BETWEEN '$weekly' AND '$today' GROUP BY userID ORDER BY userID") or die(mysqli_error($conn));
	while ($gt = mysqli_fetch_array($getTransaksi)) {
		$userID = $gt['userID'];
		$getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$userID'") or die(mysqli_error($conn));
		$gu = mysqli_fetch_array($getUser);
		$namausernya = $gu['full_name'];
		$usernamenya = $gu['user'];
		$hitung = mysqli_query($conn, "SELECT SUM(total) as komisi FROM `tb_transaksi` WHERE `userID` = '$userID' AND `jenis` = 6 AND `status` = 1 AND `date` BETWEEN '$weekly' AND '$today'") or die(mysqli_error($conn));
		$h = mysqli_fetch_array($hitung);
		$persenrolling = $komrolling;
		$bonusRabat = round($h['komisi'] * $persenrolling);
		if ($bonusRabat >= $maxkomrolling) {
			$bonusRabatMember = $maxkomrolling;
		} else {
			$bonusRabatMember = $bonusRabat;
		}
		$cekRabat = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE `userID` = '$userID' AND `jenis` = 4 AND `status` = 1 AND `date` LIKE '$tanggal%'") or die(mysqli_error($conn));
		$cr = mysqli_num_rows($cekRabat);
		if ($cr == 0) {
			if ($hari == $namaharinya or $hari == $nameofday) {
				json_decode($WL->transaksi($usernamenya, 'user_deposit', $bonusRabatMember), true);
				$insertRabat = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$today','Rabate','$bonusRabatMember',0,'Bonus Rolling Mingguan','',0,4,0,0,'$userID',1)") or die(mysqli_error($conn));
				$insertSaldoRabat = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + $bonusRabatMember WHERE `userID` = '$userID'") or die(mysqli_error($conn));
				$update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$bonusRabatMember' WHERE cuid = '1'") or die(mysqli_error($conn));
				echo '
					<b style="color:green">Bonus rolling berhasil diberikan</b> ke ' . $namausernya . '<br>
					- Transaksi rolling telah ditambahkan.<br>
					- Saldo penerima telah diupdate.<br><br>
				';
			} else {
				echo '
					<b style="color:red">Bonus rolling gagal diberikan</b> ke ' . $namausernya . '<br>
					- Jadwal pemberian tidak sesuai.<br>
					- Pengaturan Anda setiap hari ' . $namaharinya . '.<br><br>
				';
			}
		} else {
			echo '
				<b style="color:red">Bonus rolling minggu ini telah diberikan</b> ke ' . $namausernya . '<br>
				- Tidak ada proses yang di eksekusi.<br>
				- Pengaturan Anda setiap hari ' . $namaharinya . '.<br><br>
			';
		}
	}
}

echo '<hr>';

//BONUS CASHBACK MINGGUAN
if ($komcashback == 0) {
	echo 'Bonus Cashback Mingguan Dinonaktifkan';
} else {
	$getTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE `userID` NOT IN(1,2) AND `jenis` = 1 AND `status` = 1 AND `date` BETWEEN '$weekly' AND '$today' GROUP BY userID ORDER BY userID") or die(mysqli_error($conn));
	while ($gt = mysqli_fetch_array($getTransaksi)) {
		$userID = $gt['userID'];
		$getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$userID'") or die(mysqli_error($conn));
		$gu = mysqli_fetch_array($getUser);
		$namausernya = $gu['full_name'];
		$usernamenya = $gu['user'];
		$hitung = mysqli_query($conn, "SELECT SUM(total) as komisi FROM `tb_transaksi` WHERE `userID` = '$userID' AND `jenis` = 1 AND `status` = 1 AND `date` BETWEEN '$weekly' AND '$today'") or die(mysqli_error($conn));
		$h = mysqli_fetch_array($hitung);
		$persencashback = $komcashback;
		$bonusCashback = round($h['komisi'] * $persencashback);
		if ($bonusCashback >= $maxkomcashback) {
			$bonusCashbackMember = $maxkomcashback;
		} else {
			$bonusCashbackMember = $bonusCashback;
		}
		$cekCashback = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE `userID` = '$userID' AND `jenis` = 7 AND `date` LIKE '$tanggal%'") or die(mysqli_error($conn));
		$cr = mysqli_num_rows($cekCashback);
		if ($cr == 0) {
			if ($hari == $namaharinya or $hari == $nameofday) {
				json_decode($WL->transaksi($usernamenya, 'user_deposit', $bonusCashbackMember), true);
				$insertCashback = mysqli_query($conn, "INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$today','Cashback','$bonusCashbackMember',0,'Bonus Cashback Mingguan','',0,7,0,0,'$userID',1)") or die(mysqli_error($conn));
				$insertSaldoCashback = mysqli_query($conn, "UPDATE `tb_balance` SET `active` = `active` + $bonusCashbackMember WHERE `userID` = '$userID'") or die(mysqli_error($conn));
				$update_coin = mysqli_query($conn, "UPDATE `tb_seo` SET `coin` = `coin` - '$bonusCashbackMember' WHERE cuid = '1'") or die(mysqli_error($conn));
				echo '
					<b style="color:green">Bonus cashback berhasil diberikan</b> ke ' . $namausernya . '<br>
					- Transaksi cashback telah ditambahkan.<br>
					- Saldo penerima telah diupdate.<br><br>
				';
			} else {
				echo '
					<b style="color:red">Bonus cashback gagal diberikan</b> ke ' . $namausernya . '<br>
					- Jadwal pemberian tidak sesuai.<br>
					- Pengaturan Anda setiap hari ' . $namaharinya . '.<br><br>
				';
			}
		} else {
			echo '
				<b style="color:red">Bonus cashback minggu ini telah diberikan</b> ke ' . $namausernya . '<br>
				- Tidak ada proses yang di eksekusi.<br>
				- Pengaturan Anda setiap hari ' . $namaharinya . '.<br><br>
			';
		}
	}
}
