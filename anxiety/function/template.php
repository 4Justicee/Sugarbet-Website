<?php
require_once('session.php');

$warnad = $_POST['warnadasar'];
$template = $_POST['template'];
$footere = $_POST['footere'];

if ($warnad == '#0B7DDA') {
	$warnah = "#0D47A1";
	$warnab = "#030C30";
} else if ($warnad == '#DC3545') {
	$warnah = "#AD1F2D";
	$warnab = "#160405";
} else if ($warnad == '#DCC709') {
	$warnah = "#AB9B07";
	$warnab = "#181601";
} else if ($warnad == '#6329D6') {
	$warnah = "#451D96";
	$warnab = "#0A0416";
} else if ($warnad == '#04AA6D') {
	$warnah = "#049560";
	$warnab = "#011910";
} else if ($warnad == '#00CCCC') {
	$warnah = "#009999";
	$warnab = "#001A1A";
} else if ($warnad == '#05B9E1') {
	$warnah = "#0490AF";
	$warnab = "#011519";
} else if ($warnad == '#FF80EE') {
	$warnah = "#FF33E4";
	$warnab = "#1A0016";
} else if ($warnad == '#c04848') {
	$warnah = "#983434";
	$warnab = "#130707";
} else if ($warnad == '#f07241') {
	$warnah = "#d44811";
	$warnab = "#180802";
} else if ($warnad == '#e38533') {
	$warnah = "#81715e";
	$warnab = "#160c03";
} else if ($warnad == '#ddbc95') {
	$warnah = "#b38867";
	$warnab = "#130d06";
} else if ($warnad == '#f79b77') {
	$warnah = "#755248";
	$warnab = "#180801";
} else if ($warnad == '#2988bc') {
	$warnah = "#2f496e";
	$warnab = "#050f15";
} else if ($warnad == '#bc6d4f') {
	$warnah = "#500805";
	$warnab = "#120a07";
} else if ($warnad == '#dda288') {
	$warnah = "#7e675e";
	$warnab = "#140a06";
} else if ($warnad == '#cdab81') {
	$warnah = "#6c5f5b";
	$warnab = "#120d07";
} else if ($warnad == '#9f4636') {
	$warnah = "#6c2d2c";
	$warnab = "#130807";
} else if ($warnad == '#6c2d2c') {
	$warnah = "#42313a";
	$warnab = "#120807";
} else if ($warnad == '#e45355') {
	$warnah = "#c71f22";
	$warnab = "#160304";
} else if ($warnad == '#dbae58') {
	$warnah = "#bd8928";
	$warnab = "#150f04";
} else if ($warnad == '#ef968f') {
	$warnah = "#e7534b";
	$warnab = "#160604";
} else if ($warnad == '#128277') {
	$warnah = "#004d47";
	$warnab = "#031615";
} else if ($warnad == '#ebcb80') {
	$warnah = "#e3b74f";
	$warnab = "#160704";
}

//Warna Default
if (isset($_POST['warna'])) {
	$query = mysqli_query($conn, "UPDATE `tb_seo` SET `warnadasar` = '$warnad', `warnahover` = '$warnah', `warnabg` = '$warnab' WHERE cuid = 1") or die(mysqli_error($conn));
	header('location:../template/?notif=1');
	exit();
	//Tema
} else if (isset($_POST['tema'])) {
	$query = mysqli_query($conn, "UPDATE `tb_seo` SET `temautama` = '$template', `temafooter` = '$footere' WHERE cuid = 1") or die(mysqli_error($conn));
	header('location:../template/?notif=1');
	exit();
}
