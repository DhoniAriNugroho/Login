<?php
 include('koneksi.php');

 $Nomor  = $_POST['Nomor'];
 $Nama = $_POST['Nama']; 
 $Alamat  = $_POST['Alamat'];
 $Usia = $_POST['Usia'];
 
 $update = mysql_query("UPDATE data SET Nomor='$Nomor', Nama='$Nama', Alamat='$Alamat', Usia='$Usia' WHERE id='$id'") or die(mysql_error());
 
 if($update){
  
  echo 'Data berhasil di simpan! ';
  echo '<a href="update.php?id='.$id.'">Kembali</a>';
  
 }else{
  
  echo 'Gagal menyimpan data! ';
  echo '<a href="update.php?id='.$id.'">Kembali</a>';
  
 }

}else{
 echo '<script>window.history.back()</script>';
}
?>
