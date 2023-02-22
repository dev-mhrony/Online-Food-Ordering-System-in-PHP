<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM dishes WHERE d_id = '".$_GET['menu_del']."'");
header("location:all_menu.php");  

?>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->