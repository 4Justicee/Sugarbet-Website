<?php
if (!isset($_SESSION)) { session_start(); }
$_SESSION['user'] == '';
unset($_SESSION['user']);
session_destroy();
header('location:../');
?>