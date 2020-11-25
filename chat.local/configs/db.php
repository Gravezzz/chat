<?php
//info for connecting to db
$server = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

//connecting chat db
$connect = mysqli_connect($server, $username, $password, $dbname);
//кодировка базы данных
mysqli_set_charset($connect,'utf8' );

?>