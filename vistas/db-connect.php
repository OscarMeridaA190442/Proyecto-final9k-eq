<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='sistema9k';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Error al conectar a la base de datos.". $conn->error);
}