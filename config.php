<?php
$host = "localhost";
$user = "318506";
$pass = "kukubimax23";
$db = "318506";
$table = "tbl_users";
$connect = mysql_connect($host,$user,$pass) or die("Gagal konek");
$pilih_db = mysql_select_db($db) or die("Database tidak ada");
$cookie_nama = $_COOKIE['nama'];
?>