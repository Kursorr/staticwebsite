<?php
try{
	$host = 'mysql:host=localhost;dbname=antarka_team';
	$user = 'root';
	$pass = '';
	$bdd = new PDO($host, $user, $pass);
	$bdd->query("SET NAMES utf8");
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch ( PDOException $e ) {
	echo "Connection à MySQL impossible : ", $e->getMessage();
	exit();
}
error_reporting(E_ALL ^ E_NOTICE);
?>