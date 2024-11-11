<?php
require_once('session.php');
$users = $u['user'];
$pid = mysqli_real_escape_string($conn, $_POST['pid']);
$angka = mysqli_real_escape_string($conn, $_POST['angka']);
$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$sql_21 = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE cuid = '$pid'") or die(mysqli_error($conn));
$s21 = mysqli_fetch_array($sql_21);
$kodenya = $s21['code'];

if ($postID == '') {
    $getPeriode = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY no DESC LIMIT 1") or die(mysqli_error($conn));
    $gppp = mysqli_num_rows($getPeriode);
    if ($gppp == 0) {
        $periode = 1;
    } else {
        $gpp = mysqli_fetch_array($getPeriode);
        $periode = $gpp['no'] + 1;
    }
} else {
    $periode = mysqli_real_escape_string($conn, $_POST['periode']);
    $delete = mysqli_query($conn, "DELETE FROM `tb_periode` WHERE cuid = '$postID'") or die(mysqli_error($conn));
    $deletes = mysqli_query($conn, "DELETE FROM `tb_pasaran_result` WHERE pid = '$pid' AND periode = '$periode'") or die(mysqli_error($conn));
}

$created_date = date('Y-m-d H:i:s');
$created = date('Y-m-d');

//Result 4D //
$result4d = $angka;
$insert4d1 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 1, '$periode', '$result4d', '4D', '$created_date')") or die(mysqli_error($conn));

//Result 3D //
$result3d = substr($angka, -3);
$insert4d2 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 1, '$periode', '$result3d', '3D', '$created_date')") or die(mysqli_error($conn));

//Result 2D //
$result2d = substr($angka, -2);
$insert4d3 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 1, '$periode', '$result2d', '2D', '$created_date')") or die(mysqli_error($conn));

//Result COLOK BEBAS //
$result1 = substr($angka, 0, 1);
$result2 = substr($angka, 1, 1);
$result3 = substr($angka, 2, 1);
$result4 = substr($angka, 3, 1);
$insert4d4 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 5, '$periode', '$result1', '', '$created_date')") or die(mysqli_error($conn));
$insert4d5 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 5, '$periode', '$result2', '', '$created_date')") or die(mysqli_error($conn));
$insert4d6 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 5, '$periode', '$result3', '', '$created_date')") or die(mysqli_error($conn));
$insert4d7 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 5, '$periode', '$result4', '', '$created_date')") or die(mysqli_error($conn));

//Result COLOK BEBAS 2D //
$resultA = $result1 . $result2;
$resultB = $result1 . $result3;
$resultC = $result1 . $result4;
$resultD = $result2 . $result1;
$resultE = $result2 . $result3;
$resultF = $result2 . $result4;
$resultG = $result3 . $result1;
$resultH = $result3 . $result2;
$resultI = $result3 . $result4;
$resultJ = $result4 . $result1;
$resultK = $result4 . $result2;
$resultL = $result4 . $result3;
$insert4d8 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultA', '', '$created_date')") or die(mysqli_error($conn));
$insert4d9 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultB', '', '$created_date')") or die(mysqli_error($conn));
$insert4d10 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultC', '', '$created_date')") or die(mysqli_error($conn));
$insert4d11 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultD', '', '$created_date')") or die(mysqli_error($conn));
$insert4d12 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultE', '', '$created_date')") or die(mysqli_error($conn));
$insert4d13 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultF', '', '$created_date')") or die(mysqli_error($conn));
$insert4d14 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultG', '', '$created_date')") or die(mysqli_error($conn));
$insert4d15 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultH', '', '$created_date')") or die(mysqli_error($conn));
$insert4d16 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultI', '', '$created_date')") or die(mysqli_error($conn));
$insert4d17 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultJ', '', '$created_date')") or die(mysqli_error($conn));
$insert4d18 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultK', '', '$created_date')") or die(mysqli_error($conn));
$insert4d19 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 6, '$periode', '$resultL', '', '$created_date')") or die(mysqli_error($conn));

//Result COLOK JITU //
$resultAs = substr($angka, 0, 1);
$resultKop = substr($angka, 1, 1);
$resultKepala = substr($angka, 2, 1);
$resultEkor = substr($angka, 3, 1);
$insert4d20 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 8, '$periode', '$resultAs', 'AS', '$created_date')") or die(mysqli_error($conn));
$insert4d21 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 8, '$periode', '$resultKop', 'KOP', '$created_date')") or die(mysqli_error($conn));
$insert4d22 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 8, '$periode', '$resultKepala', 'KEPALA', '$created_date')") or die(mysqli_error($conn));
$insert4d23 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 8, '$periode', '$resultEkor', 'EKOR', '$created_date')") or die(mysqli_error($conn));

//Result TENGAH //
$e = substr($angka, 2, 2);
if ($e >= 25 && $e <= 74) {
    $resultTengah = 'TENGAH';
} else {
    $resultTengah = 'TEPI';
}
$insert4d24 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 9, '$periode', '$resultTengah', '', '$created_date')") or die(mysqli_error($conn));

//Result DASAR //
$c = substr($angka, 2, 1);
$d = substr($angka, 3, 1);
$e = $c + $d;
if ($e > 9) {
    $f = substr($e, 0, 1);
    $g = substr($e, 1, 1);
    $apa = $f + $g;
} else {
    $apa = $e;
}
if ($apa % 2) {
    $dasar1 = 'GANJIL';
} else {
    $dasar1 = 'GENAP';
}
if ($apa < 5) {
    $dasar2 = 'KECIL';
} else {
    $dasar2 = 'BESAR';
}
$insert4d25 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 13, '$periode', '$dasar1', '', '$created_date')") or die(mysqli_error($conn));
$insert4d26 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 13, '$periode', '$dasar2', '', '$created_date')") or die(mysqli_error($conn));

//Result SHIO //
$a = substr($angka, 2, 1);
$b = substr($angka, 3, 1);
$aa = $a . $b;
if ($aa == '00') {
    $aaa = 100;
} else {
    $aaa = $aa;
}

if ((int)$aaa <= 12) {
    $g = $aaa;
} else {
    $h = ($aa / 12);
    $h = floor($h);
    $g = $aa - (12 * $h);
    if ($g == 0) {
        $gg = 12;
    } else {
        $gg = $g;
    }
}
if ($gg == 1) {
    $posisi = 'Kuda';
} else if ($gg == 2) {
    $posisi = 'Ular';
} else if ($gg == 3) {
    $posisi = 'Naga';
} else if ($gg == 4) {
    $posisi = 'Kelinci';
} else if ($gg == 5) {
    $posisi = 'Harimau';
} else if ($gg == 6) {
    $posisi = 'Kerbau';
} else if ($gg == 7) {
    $posisi = 'Tikus';
} else if ($gg == 8) {
    $posisi = 'Babi';
} else if ($gg == 9) {
    $posisi = 'Anjing';
} else if ($gg == 10) {
    $posisi = 'Ayam';
} else if ($gg == 11) {
    $posisi = 'Monyet';
} else if ($gg == 12) {
    $posisi = 'Kambing';
}
$insert4d27 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 22, '$periode', '$gg', '$posisi', '$created_date')") or die(mysqli_error($conn));

//Result SILANG - HOMO //
if ($result1 % 2) {
    $bb = 'GANJIL';
} else {
    $bb = 'GENAP';
}
if ($result2 % 2) {
    $cc = 'GANJIL';
} else {
    $cc = 'GENAP';
}
if ($result3 % 2) {
    $dd = 'GANJIL';
} else {
    $dd = 'GENAP';
}
if ($result4 % 2) {
    $ee = 'GANJIL';
} else {
    $ee = 'GENAP';
}

if ($bb == $cc) {
    $resultDepan = 'HOMO';
    $insert4d28 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultDepan', 'DEPAN', '$created_date')") or die(mysqli_error($conn));
} else {
    $resultDepan = 'SILANG';
    $insert4d28 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultDepan', 'DEPAN', '$created_date')") or die(mysqli_error($conn));
}

if ($cc == $dd) {
    $resultTengah = 'HOMO';
    $insert4d29 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultTengah', 'TENGAH', '$created_date')") or die(mysqli_error($conn));
} else {
    $resultTengah = 'SILANG';
    $insert4d29 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultTengah', 'TENGAH', '$created_date')") or die(mysqli_error($conn));
}

if ($dd == $ee) {
    $resultBelakang = 'HOMO';
    $insert4d30 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultBelakang', 'BELAKANG', '$created_date')") or die(mysqli_error($conn));
} else {
    $resultBelakang = 'SILANG';
    $insert4d30 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 23, '$periode', '$resultBelakang', 'BELAKANG', '$created_date')") or die(mysqli_error($conn));
}


//Result KEMBANG KEMPIS KEMBAR //
if ($result1 == $result2) {
    $resulteDepan = 'KEMBAR';
    $insert4d31 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteDepan', 'DEPAN', '$created_date')") or die(mysqli_error($conn));
} else if ($result1 < $result2) {
    $resulteDepan = 'KEMBANG';
    $insert4d31 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteDepan', 'DEPAN', '$created_date')") or die(mysqli_error($conn));
} else {
    $resulteDepan = 'KEMPIS';
    $insert4d31 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteDepan', 'DEPAN', '$created_date')") or die(mysqli_error($conn));
}

if ($result2 == $result3) {
    $resulteTengah = 'KEMBAR';
    $insert4d32 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteTengah', 'TENGAH', '$created_date')") or die(mysqli_error($conn));
} else if ($result2 < $result3) {
    $resulteTengah = 'KEMBANG';
    $insert4d32 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteTengah', 'TENGAH', '$created_date')") or die(mysqli_error($conn));
} else {
    $resulteTengah = 'KEMPIS';
    $insert4d32 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteTengah', 'TENGAH', '$created_date')") or die(mysqli_error($conn));
}

if ($result3 == $result4) {
    $resulteBelakang = 'KEMBAR';
    $insert4d33 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteBelakang', 'BELAKANG', '$created_date')") or die(mysqli_error($conn));
} else if ($result3 < $result4) {
    $resulteBelakang = 'KEMBANG';
    $insert4d33 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteBelakang', 'BELAKANG', '$created_date')") or die(mysqli_error($conn));
} else {
    $resulteBelakang = 'KEMPIS';
    $insert4d33 = mysqli_query($conn, "INSERT INTO `tb_pasaran_result` (`pid`, `gameid`, `periode`, `p_result`, `posisi`, `created_date`) VALUES ('$pid', 30, '$periode', '$resulteBelakang', 'BELAKANG', '$created_date')") or die(mysqli_error($conn));
}

$insertPeriode = mysqli_query($conn, "INSERT INTO `tb_periode` (`pid`, `no`, `code`, `created`, `result`, `created_date`, `status`) VALUES ('$pid','$periode','$kodenya','$created', '$angka', '$created_date', 0)") or die(mysqli_error($conn));
header('location:../result/');
exit();
