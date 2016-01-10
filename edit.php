<?php
include "koneksi.php";
//get the value from form update
$no = $_POST['no'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$no_telfon = $_POST['no_telfon'];

//query for update data in database
 $query = "UPDATE tabel_admin SET username = '$username', password = '$password', nama = '$nama', no_telfon = '$no_telfon' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "halamanadmin.php";
	echo "<h4> update data success </h4>";
}
?>