<?php if (!isset($_SESSION)) {
	session_start();
}
if (isset($_GET['aksi'])) {
	if ($_GET['aksi'] == 'keluar') {
		session_unset();
		session_destroy();
		echo '<script>window.location = "index.php";</script>';
	}
}


function arr2md5($arrinput)
{
	$hasil = '';
	foreach ($arrinput as $val) {
		if ($hasil == '') {
			$hasil = md5($val);
		} else {
			$code = md5($val);
			for ($hit = 0; $hit < min(array(strlen($code), strlen($hasil))); $hit++) {
				$hasil[$hit] = chr(ord($hasil[$hit]) ^ ord($code[$hit]));
			}
		}
	}
	return (md5($hasil));
}
function getPassword($pase)
{
	$pass = arr2md5($pase);
	return $pass;
}

foreach ($_POST as $key => $value) {
	$$key = $value;
}
include "sys_koneksi.php";
$sql = "SELECT  fullname  , username as nama_user , password  as kata_sandi, code_activation   , group_name FROM v_users where username='$username'";
$quer = mysqli_query($koneksi, $sql);
$cek = '';
$kata_sandi = '';
while ($h = mysqli_fetch_array($quer)) {
	foreach ($h as $key => $value) {
		$$key = $value;
	}
	$cek = arr2md5(array($code_activation, $password));
}
if ($cek == $kata_sandi && $cek <> '') {
	$data = 'berhasil';
	echo json_encode($data);
	$_SESSION['username'] = $nama_user;
	$_SESSION["fullname"] = $fullname;
	$_SESSION["group_name"] = $group_name;
	//$this->session->userdata('fullname');
	//$this->session->set_userdata('fullname', $fullname);

} else {
	$data = 'gagal';
	echo json_encode($data);
}
