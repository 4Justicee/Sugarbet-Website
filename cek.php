<?php
include('config/koneksi.php');

$pragmatic = json_decode($WL->gameList('PRAGMATIC'), true);
$a = 0;
while ($a < 338) {
    $cekgames = $pragmatic['games'][$a];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'PRAGMATIC';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodba = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $a++;
}

$habanero = json_decode($WL->gameList('HABANERO'), true);
$b = 0;
while ($b < 105) {
    $cekgames = $habanero['games'][$b];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'HABANERO';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbb = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $b++;
}

$boongo = json_decode($WL->gameList('BOOONGO'), true);
$c = 0;
while ($c < 49) {
    $cekgames = $boongo['games'][$c];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'BOOONGO';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbc = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $c++;
}

$playson = json_decode($WL->gameList('PLAYSON'), true);
$d = 0;
while ($d < 9) {
    $cekgames = $playson['games'][$d];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'PLAYSON';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbd = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $d++;
}

$cqcq = json_decode($WL->gameList('CQ9'), true);
$e = 0;
while ($e < 48) {
    $cekgames = $cqcq['games'][$e];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'CQ9';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbe = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $e++;
}

$evopay = json_decode($WL->gameList('EVOPLAY'), true);
$f = 0;
while ($f < 57) {
    $cekgames = $evopay['games'][$f];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'EVOPLAY';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbf = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $f++;
}

$toptrend = json_decode($WL->gameList('TOPTREND'), true);
$g = 0;
while ($g < 39) {
    $cekgames = $toptrend['games'][$g];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'TOPTREND';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbg = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $g++;
}

$dreamtech = json_decode($WL->gameList('DREAMTECH'), true);
$h = 0;
while ($h < 57) {
    $cekgames = $dreamtech['games'][$h];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'DREAMTECH';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbh = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $h++;
}

$pgsoft = json_decode($WL->gameList('PGSOFT'), true);
$i = 0;
while ($i < 38) {
    $cekgames = $pgsoft['games'][$i];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'PGSOFT';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbi = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $i++;
}

$reelking = json_decode($WL->gameList('REELKINGDOM'), true);
$j = 0;
while ($j < 24) {
    $cekgames = $reelking['games'][$j];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'REELKINGDOM';
    $game_category = 'slots';
    $game_image = $cekgames['banner'];
    $inserttodbj = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $j++;
}

$ezugi = json_decode($WL->gameList('EZUGI'), true);
$k = 0;
while ($k < 37) {
    $cekgames = $ezugi['games'][$k];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'EZUGI';
    $game_category = 'casino';
    $game_image = $cekgames['banner'];
    $inserttodbk = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $k++;
}

$evolution = json_decode($WL->gameList('EVOLUTION'), true);
$l = 0;
while ($l < 78) {
    $cekgames = $evolution['games'][$l];
    $game_code = $cekgames['game_code'];
    $game_name = $cekgames['game_name'];
    $game_provider = 'EVOLUTION';
    $game_category = 'casino';
    $game_image = $cekgames['banner'];
    $inserttodbl = mysqli_query($conn, "INSERT INTO `tb_gamenew` (`game_code`, `game_name`, `game_provider`, `game_category`, `game_image`) VALUES ('$game_code', '$game_name', '$game_provider', '$game_category', '$game_image')");
    $l++;
}
