<?php
$host = "192.168.1.7";
$user_host = "plolo";
$password_host = "masplolo58";
$db_host = "sipp";
$db_hawasbid = "hawasbid";


$koneksi = mysqli_connect($host, $user_host, $password_host);
$hawasbid = mysqli_connect($host, $user_host, $password_host);




mysqli_select_db($koneksi, $db_host);
mysqli_select_db($hawasbid, $db_hawasbid);
