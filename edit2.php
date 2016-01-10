<?php
include "koneksi.php";
//get the value from form update
$no = $_POST['no'];
$pengumuman = $_POST['pengumuman'];

//query for update data in database
 $query = "UPDATE tabel_info SET pengumuman = '$pengumuman' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "halamanadmin.php";
	echo "<h4> update data success </h4>";
}
?>