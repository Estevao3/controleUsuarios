<?php
$dsn = "mysql:dbname=controleusuarios;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {
	echo "Falhou a conex�o: ".$e->getMessage();
}