<?php
//DB details
$dbHost = '192.168.1.12';
$dbUsername = 'eguzman';
$dbPassword = 'Unicah123@';
$dbName = 'sifcon';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>