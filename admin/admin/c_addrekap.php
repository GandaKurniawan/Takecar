<?php
include '../../connect.php'; //untuk menyertakan  file koneksi.php kedalam file login.php

if (isset($_POST['submit'])) {
    $status = "UPDATE pengembalian SET pengembalian='kembali' WHERE id_pengembalian='".$_POST['id_pengembalian']."'";
    $stmt = $db->prepare($status);
    $stmt->execute();
    header("Location: rekap.php");
}else{
  var_dump($_POST['submit']);
}
 ?>
