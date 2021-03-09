<?php session_start();
session_destroy();
$_SESSION = array(); // die session (cleaned/empty)
header('Location: login.php');
