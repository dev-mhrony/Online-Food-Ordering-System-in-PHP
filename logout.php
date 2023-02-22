<?php
session_start(); 
session_destroy(); 
$url = 'login.php';
header('Location: ' . $url); 

?>