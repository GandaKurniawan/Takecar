<?php
include '../../connect.php'; //untuk menyertakan  file koneksi.php kedalam file login.php

if (isset($_POST['submit'])) {

    $book = $db->prepare("INSERT INTO pengembalian VALUES(NULL,:tgl_pemesanan,:total_bayar,:total_denda,:nama)");
    $book->bindParam(':tgl_pemesanan', $_POST['tgl_pemakaian']);
    $book->bindParam(':total_bayar', $_POST['harga']);
    $book->bindParam(':total_denda', $_POST['harga']);
    $book->bindParam(':nama', $_POST['nama']);
    $pemesanan = $db->prepare("DELETE from pemesanan where id_pemesanan = :id ");
    $pemesanan->bindParam(':id', $_POST['id_peminjaman']);
    $delete = $db->prepare("DELETE from mobil where id_mobil = :id ");
	$delete->bindParam(':id', $_POST['id_mobil']);
    $book->execute();
	$pemesanan->execute();
	$delete->execute();
    header("Location: pengembalian.php");
}else{
  var_dump($_POST['submit']);
}
 ?>
