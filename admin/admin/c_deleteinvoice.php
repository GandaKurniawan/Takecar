<?php

include '../../connect.php';
$pemesanan =$_GET['id'];
if (isset($_GET['id'])) {

	extract($_GET);

	$book = $db->prepare("DELETE from pemesanan where id_pemesanan = :id ");
	$book->bindParam(':id', $pemesanan);
	$book->execute();
	header("Location: invoice.php");

}
