<?php

include 'koneksi.php';
$no = $_GET['no'];
$hapus = mysql_query("delete from tabel_info where no=$no");
if ($hapus) {
    header("location:halamanadmin.php");
} else {
    echo "gagal menghapus";
}
?>