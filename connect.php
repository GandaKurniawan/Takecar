<?php
session_start();
$server = 'localhost';
$db_name = 'takecar';
$user = 'root';
$pass = '';

try {
	$db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
