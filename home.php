<?php session_start();
if( isset($_SESSION['username'])){
include "koneksi.php";
 $query=mysql_query("select * from data");
 $jumlah=mysql_num_rows($query);
 echo "Selamat datang : ".$_SESSION['username'];
 echo "<br><br>";
 echo "Jumlah data ada : ".$jumlah;

 ?>
 <table border="1">
 <tr>
 <th>Nomor</th><th>Nama</th>
 <th>Alamat</th><th>Usia</th>
 <th>Aksi</th>
 </tr>
 <?php
 $no=0; 

 while($row=mysql_fetch_array($query)){
 ?>
 <tr>
 <td><?php echo $no=$no+1;?></td>
 <td><?php echo $row['Nama'];?></td>
 <td><?php echo $row['Alamat'];?></td>
 <td><?php echo $row['Usia'];?></td>
 <td>

 <a href="delete.php?id=<?php echo $data['Nomor']; ?>" onclick="return
confirm('Apakah anda yakin?')">Delete</a>
 <a href="../update.php?id=<?php echo $row['id']; ?>">Update</a>
 </td>
 </tr>
 <?php
 }
 ?>
 </table><br />
 <a href="logout.php">Logout</a>
<?php
}else{
 ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
dahulu</a><?php
}
?> 