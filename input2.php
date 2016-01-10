<?php
include("koneksi.php");

$no = $_POST['no'];
$pengumuman = $_POST['pengumuman'];
$query = mysql_query("INSERT INTO tabel_info values  ('$no','$pengumuman')");
echo "Data Telah disimpan";
header("location:halamanadmin.php");

?>