<?php

$host = 'localhost';
$dbname = 'speedrun_website';
$username = 'root';
$password = 'root1234';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = 
[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try 
{
    $pdo = new PDO($dsn, $username, $password, $options);
} 
catch (PDOException $e) 
{
    die("Database connection failed: " . $e->getMessage());
}
