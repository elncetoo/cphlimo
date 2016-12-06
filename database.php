<?php
$server = 'localhost:3307';
$username = 'root';
$password = 'root';
$database = 'cphlimo';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}