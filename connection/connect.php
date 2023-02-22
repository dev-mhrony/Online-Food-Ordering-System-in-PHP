<?php
/*!
 *  Author Name: MH RONY.
 *  GigHub Link: https://github.com/dev-mhrony
 *  Facebook Link:https://www.facebook.com/dev.mhrony
 *  Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
 *  Visit My Website : developerrony.com 

      */
//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "code_camp_bd_fos";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}
/*!
 *  Author Name: MH RONY.
 *  GigHub Link: https://github.com/dev-mhrony
 *  Facebook Link:https://www.facebook.com/dev.mhrony
 *  Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
 *  Visit My Website : developerrony.com 

      */
?>