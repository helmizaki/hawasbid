<?php
$host = "192.168.1.8";
$user_host = "plolo";
$password_host = "masplolo58";
$db_host = "hawasbid";


$koneksi = mysqli_connect($host, $user_host, $password_host);




mysqli_select_db($koneksi, $db_host);
