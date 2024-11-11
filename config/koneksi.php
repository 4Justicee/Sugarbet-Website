<?php


date_default_timezone_set("Asia/Jakarta");
require("function.php");

// SEMUA DATA DIBAWAH INI HARUS VALID!!!

// Database
$host 			= "localhost"; //host db, ex: localhost
$user 			= "u208589352_sb781";  //user db
$password 		= "Medan110400@"; //password db
$database 		= "u208589352_sb781"; //database name

// Koneksi
$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($conn));
if ($conn) {
} else {
	echo "Koneksi Gagal";
}

// Brand
$app_name 		= 'SURGABET781'; //Nama pendek
$slogan 		= 'SLOT GACOR DAN TERPERCAYA'; //Tagline
$descalt		= 'SURGABET781 merupakan platform slot, casino live, dan togel online terbesar dengan berbagai provider dan rtp tertinggi yang telah menjadi situs taruhan tepercaya di antara para pemain dan petaruh profesional.'; //Deskripsi alternatif
$companyname	= 'SURGABET781'; //Nama perusahaan
$companyurl		= 'https://surgabet781.com'; //Domain web perusahaan

// URL
$urldomain 		= 'https://surgabet781.com'; //url domain. tanpa slash
$domainutama	= 'https://surgabet781.com'; //sama dengan $urldomain jika install web di 1 domain
$urladmin 		= $urldomain . '/anxiety';
$urlketentuan 	= $urldomain . '/page/ketentuan';

// Kontak
$emailutama		= 'cs@surgabet781.com'; //Email admin
$wautama		= '6281266104620'; //No WA admin (diawali 62 / kode negara)

// Link apk Android. Jika tidak ada kosongkan: $linkapp = '';
$linkapp		= '';

// API google captcha v2 Checkbox
// Daftar di https://www.google.com/recaptcha/admin
$config['captcha'] = array(
	'sitekey' 	=> '6LejHUopAAAAAMAmWWMaTxb7lJ9zzi_c7-o3D3zA', //site key
	'secretkey'	=> '6LejHUopAAAAAD_bOZszO_hlvzwHeeJ7JdEhkZhL' // secret key
);

// Email SMTP
$config['mail'] = array(
	'enkripsi'	=> 'ssl', // ssl atau tls
	'host'		=> 'mail.anxietyproject.xyz', // host mail
	'port' 		=> '465', // port email
	'username' 	=> '', // email smtp
	'password' 	=> '' // password email smtp
);

require_once("other.php");
