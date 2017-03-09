<?php
 include "koneksi.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM data WHERE Nomor='$id'";
 $result = mysql_query($sql);
 $row=mysql_fetch_array($result);
?>
 
<h3>Form Edit</h3>
<form method="post" action="home.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<table>
 <tr>
 	<td>Nomor</td>
 	<td><input type="text" name="nama" value="<?php echo $row['Nomor']; ?>" /></td>
  </tr>
  <tr>
	<td>Nama</td>
	<td><input type="text" name="alamat" value="<?php echo $row['Nama']; ?>" /></td>
  </tr>
  <tr>
  	<td>Alamat</td>
  	<td><input type="text" name="telp" value="<?php echo $row['Alamat']; ?>" /></td>
  </tr>
  <tr>
  	<td>Usia</td>
  	<td><input type="text" name="email" value="<?php echo $row['Usia']; ?>" /></td>
  </tr>
  <tr>
	<td colspan="2"><input type="submit" value="Simpan"></td>
  </tr>
</table>	
</form>
