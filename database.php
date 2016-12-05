<?php
$server = 'localhost';
$username = 'creartiv_admin';
$password = 'nG2v2!t#NfFU';
$database = 'creartiv_cphlimo';
try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}