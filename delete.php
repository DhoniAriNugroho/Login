<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM data WHERE Nomor='$id' ";
    $hasil_query = mysql_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysql_errno($link).
           " - ".mysql_error($link));
    }
  }
  header("location:home.php");
?>
