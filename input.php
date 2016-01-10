<?php
include("koneksi.php");

$no = $_POST['no'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$no_telfon = $_POST['no_telfon'];
$query = mysql_query("INSERT INTO tabel_admin values  ('$no','$username','$password','$nama','$no_telfon')");
echo "Data Telah disimpan";
header("location:halamanadmin.php");

?>