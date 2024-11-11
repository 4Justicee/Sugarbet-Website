<?php
include('config/koneksi.php');

$const = json_decode($WL->getbalance('testwl2'), true);
$consta = $const['user_list'];
echo number_format($consta[0]['user_balance'], 0, ",", ".");