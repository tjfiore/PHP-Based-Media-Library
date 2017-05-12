<?php 
$localhost = 'localhost';
$user = 'root';
$pass = '';

try{
//PDO connection with PHP and a database
$db = new PDO("mysql:host=$localhost;dbname=database",$user,$pass); 
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//var_dump($db);
	//echo "Connected to database.";
} catch(PDOException $e){
	echo "Unable to connect";
	exit;
}


