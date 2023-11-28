<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "toko";
$koneksi = mysqli_connect($host, $username, $password, $database);
if ($koneksi) {
	echo " ";
} else {
	echo "Server Not Connected";
}
?>