<?php

include '../../connect.php';
$pengembalian =$_GET['id'];
if (isset($_GET['id'])) {

	extract($_GET);

	$book = $db->prepare("DELETE from pengembalian where id_pengembalian = :id ");
	$book->bindParam(':id', $pengembalian);
	$book->execute();
	header("Location: pengembalian.php");

}
