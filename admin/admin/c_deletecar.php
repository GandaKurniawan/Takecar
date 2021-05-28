<?php

include '../../connect.php';
$mobil=$_GET['id'];
if (isset($_GET['id'])) {

	extract($_GET);

	$book = $db->prepare("DELETE from mobil where id_mobil = :id ");
	$book->bindParam(':id', $mobil);
	$book->execute();
	header("Location: mobil.php");

}
