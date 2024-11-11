<?php


ob_start();
if (!isset($_SESSION)) {
    session_start();
}

include_once('koneksi.php');

$sql_a = mysqli_query($conn, "SELECT * FROM `tb_admin` WHERE cuid = 1") or die(mysqli_error($conn));
$sa = mysqli_fetch_array($sql_a);
$sabonusregister = $sa['bonusregister'];
$samindepo = $sa['mindepo'];
$samaxdepo = $sa['maxdepo'];
$saminwede = $sa['minwede'];
$samaxwede = $sa['maxwede'];
$sakomaff = $sa['komaff'];
$samaxkomaff = $sa['maxkomaff'];
$sakomrolling = $sa['komrolling'];
$samaxkomrolling = $sa['maxkomrolling'];
$sakomcashback = $sa['komcashback'];
$samaxkomcashback = $sa['maxkomcashback'];
$saharibonus = $sa['haribonus'];
$saratepulsa = $sa['ratepulsa'];
$sarateusd = $sa['rateusd'];
$sarateusdt = $sa['rateusdt'];
$sarateethereum = $sa['rateethereum'];
$saratebitcoin = $sa['ratebitcoin'];
$saratewdpulsa = $sa['ratewdpulsa'];
$saratewdusd = $sa['ratewdusd'];
$saratewdusdt = $sa['ratewdusdt'];
$saratewdethereum = $sa['ratewdethereum'];
$saratewdbitcoin = $sa['ratewdbitcoin'];

$sql_b = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$sb = mysqli_fetch_array($sql_b);
$sbvemail = $sb['vemail'];
$sbvrek = $sb['vrek'];
$sbsinkdepo = $sb['sinkdepo'];
$sbminimrtp = $sb['minrtp'];
$sbmaximrtp = $sb['maxrtp'];

// Verifikasi email
$verifreg = $sbvemail;

// Member ganti rekening
$gantirek = $sbvrek;

// Sinkronisasi metode deposit
$automethod = $sbsinkdepo;

// Min max info RTP Random
$minrtp = $sbminimrtp;
$maxrtp = $sbmaximrtp;

// Bonus registrasi member
$bonusregister    = $sabonusregister;

// Min max deposit withdraw
$mindepo    = $samindepo;
$maxdepo     = $samaxdepo;
$minwede     = $saminwede;
$maxwede     = $samaxwede;

// Komisi dan bonus
$komaff            = $sakomaff; //komisi referral
$maxkomaff        = $samaxkomaff; //maksimal komisi referral

$komrolling        = $sakomrolling; //bonus rolling
$maxkomrolling    = $samaxkomrolling; //maksimal bonus rolling

$komcashback    = $sakomcashback; //bonus cashback
$maxkomcashback    = $samaxkomcashback; //maksimal bonus cashback

// Hari bonus rolling dan cashback
$haribonus    = $saharibonus;

// RATE DEPOSIT
$rateidr        = 1; //1 IDR ke IDR
$ratepulsa        = $saratepulsa;
$rateusd        = $sarateusd;
$rateusdt        = $sarateusdt;
$rateethereum    = $sarateethereum;
$ratebitcoin    = $saratebitcoin;

// RATE WITHDRAW
$ratewdidr        = 1; //1 IDR ke IDR
$ratewdpulsa    = $saratewdpulsa;
$ratewdusd        = $saratewdusd;
$ratewdusdt        = $saratewdusdt;
$ratewdethereum    = $saratewdethereum;
$ratewdbitcoin    = $saratewdbitcoin;

// Jangan diubah!
$tekskomaff         = $komaff * 100;
$tekskomrolling     = $komrolling * 100;
$tekskomcashback     = $komcashback * 100;
$teksmaxkomaff         = number_format($maxkomaff, 0, ',', '.');
$teksmaxkomrolling     = number_format($maxkomrolling, 0, ',', '.');
$teksmaxkomcashback    = number_format($maxkomcashback, 0, ',', '.');

//Upload Bukti TF (0 = Nonaktif | 1 = Aktif)
$buktitf = '0';
