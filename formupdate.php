<?php
include 'koneksi.php';
$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM tabel_admin WHERE no = $no"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
<form method="post" action="edit.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td>No</td>
    <td>:</td>
    <td> <input type="text" name="no" value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>UserName</td>
    <td>:</td>
    <td> <textarea name="username"><?php echo $data['username']; ?></textarea></td>
  </tr>
  
    <tr>
  	<td>Password</td>
    <td>:</td>
    <td> <textarea name="password"><?php echo $data['password']; ?></textarea></td>
  </tr>
  
    <tr>
  	<td>Nama</td>
    <td>:</td>
    <td> <textarea name="nama"><?php echo $data['nama']; ?></textarea></td>
  </tr>
  
    <tr>
  	<td>No Telfon</td>
    <td>:</td>
    <td> <textarea name="no_telfon"><?php echo $data['no_telfon']; ?></textarea></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>