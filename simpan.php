<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya

 $Nomor  = $_POST['Nomor']; //membuat variabel $nim dan datanya dari inputan NIM
 $Nama = $_POST['Nama']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $Alamat  = $_POST['Alamat']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
 $Usia = $_POST['Usia']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
 
 //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
 $update = mysql_query("UPDATE data SET Nomor='$Nomor', Nama='$Nama', Alamat='$Alamat', Usia='$Usia' WHERE id='$id'") or die(mysql_error());
 
 //jika query update sukses
 if($update){
  
  echo 'Data berhasil di simpan! ';  //Pesan jika proses simpan sukses
  echo '<a href="edit.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
 }else{
  
  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edit.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
 }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit
 echo '<script>window.history.back()</script>';

}
?>