<?php
session_start();

if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'en';
}

$lang = $_SESSION['lang'];
?>