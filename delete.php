<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["id"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM data WHERE id='$id' ";
    $hasil_query = mysql_query($link, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysql_errno($link).
           " - ".mysql_error($link));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:index.php");
?>