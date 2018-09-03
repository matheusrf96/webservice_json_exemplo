<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *'); // Permitir acesso remoto pelo app do Ionic
header("Content-Type: application/json"); // Converter o conteúdo para json

require_once "db.php";

$db = new DB();

$sql = "SELECT * FROM pessoas";
$db->query($sql);
$result['listaPessoas'] = $db->resultSet($sql); 

echo json_encode($result);
