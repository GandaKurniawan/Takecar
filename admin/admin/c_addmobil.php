<?php
include '../../connect.php'; //untuk menyertakan  file koneksi.php kedalam file login.php

if (isset($_POST['submit'])) {

    $book = $db->prepare("INSERT INTO mobil VALUES(NULL,:nama,:jenis,:plat,:kapasitas,:foto,:harga,:status)");
    $book->bindParam(':nama', $_POST['nama']);
    $book->bindParam(':jenis', $_POST['jenis']);
    $book->bindParam(':plat', $_POST['plat']);
    $book->bindParam(':kapasitas', $_POST['kapasitas']);
    $book->bindParam(':foto', $_POST['foto']);
    $book->bindParam(':harga', $_POST['harga']);
    $book->bindParam(':status', $_POST['status']);
    $book->execute();
    header("Location: mobil.php");
}else{
  var_dump($_POST);
}
 ?>
