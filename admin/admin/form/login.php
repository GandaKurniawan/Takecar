<?php
session_start();
?>
<?php

include '../../../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$book = $db->prepare("SELECT * FROM user where username = :username and password = :password");
$book->bindParam(':username', $username);
$book->bindParam(':password', $password);
$book->execute();

if ($book->rowCount() == 1) {

	$row = $book->fetch();
	$_SESSION['user'] = $row['Id_user'];
	$_SESSION['nama'] = $row['username'];

	header("Location: ../index.php");
} else {
	header("location: login.html");
}
?>
<?php
