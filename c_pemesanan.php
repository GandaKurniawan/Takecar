<?php
include 'connect.php'; //untuk menyertakan  file koneksi.php kedalam file login.php

//
if (isset($_POST['submit'])) {
    $book = $db->prepare("INSERT INTO pemesanan VALUES(NULL,:tgl_pemakaian, :tgl_kembali,:name,:alamat,:telephone,:id_mobil)");
    $book->bindParam(':tgl_pemakaian', $_POST['tgl_pemakaian']);
    $book->bindParam(':tgl_kembali', $_POST['tgl_kembali']);
    $book->bindParam(':name', $_POST['nama']);
    $book->bindParam(':alamat', $_POST['alamat']);
    $book->bindParam(':telephone', $_POST['telephone']);
    $book->bindParam(':id_mobil', $_POST['id_mobil']);
    $book->execute();
    header("Location: index.php");  // akan menampilkan halaman login lagi
}else{
  var_dump($_POST);
}
 ?>
