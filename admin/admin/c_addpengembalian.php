<?php
include '../../connect.php'; //untuk menyertakan  file koneksi.php kedalam file login.php

if (isset($_POST['submit'])) {

    $book = $db->prepare("INSERT INTO pengembalian VALUES(NULL,:tgl_pemesanan,:total_bayar,:total_denda,:name,:pengembalian,:id_mobil)");
    $book->bindParam(':id_mobil', $_POST['id_mobil']);
    $book->bindParam(':tgl_pemesanan', $_POST['tgl_pemakaian']);
    $book->bindParam(':total_bayar', $_POST['harga']);
    $book->bindParam(':total_denda', $_POST['harga']);
    $book->bindParam(':name', $_POST['name']);
    $book->bindParam(':pengembalian', $_POST['pengembalian']);
    $book->execute();
    $status = "UPDATE mobil SET status='disewa'";
    $stmt = $db->prepare($status);
    $stmt->execute();
    $pemesanan = $db->prepare("DELETE from pemesanan where id_pemesanan = :id ");
    $pemesanan->bindParam(':id', $_POST['id_peminjaman']);

	$pemesanan->execute();
    header("Location: pengembalian.php");
}else{
  var_dump($_POST['submit']);
}
 ?>
