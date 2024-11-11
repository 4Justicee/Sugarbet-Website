<?php
require_once('session.php');

$useridnya = $u['user'];
$gameID = $_GET['gamecode'];
$gameProvider = $_GET['providercode'];

$openGames = json_decode($WL->openGame($useridnya, $gameProvider, $gameID), true);

if ($openGames['status'] == 1) {
    header('location: ' . $openGames['launch_url']);
} else {
    header('location:' . $urldomain . '/deposit?notif=3');
    exit();
}
