<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$namadb = 'absensi';
$db_link	= mysqli_connect($host,$user,$pass,$namadb);
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>