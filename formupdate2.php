<?php
include 'koneksi.php';
$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM tabel_info WHERE no = $no"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
<form method="post" action="edit2.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>
<!--
  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>
-->
<tr>
  	<td>No</td>
    <td>:</td>
    <td> <input type="text" name="no" value="<?php echo $data['no']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>Pengumuman</td>
    <td>:</td>
    <td> <textarea name="pengumuman"><?php echo $data['pengumuman']; ?></textarea></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>