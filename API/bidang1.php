<?php
include "sys_koneksi.php";
$tahun = $_POST["tahun"];
$semester = $_POST["semester"];

$hasil = mysqli_query($koneksi, "select * from hawasbid where tahun = '" . $tahun . "' and semester = '" . $semester . "' ");
