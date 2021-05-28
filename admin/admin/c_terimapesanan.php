<?php

include '../../connect.php';

if (isset($_GET['id'])) {

	extract($_GET);

$book = $db->prepare("UPDATE pemesanan set status_pemesanan = '1' where id_pemesanan = :id ");
$book->bindParam(':id', $id);
$book->execute();
header("Location: admin.php");

}
