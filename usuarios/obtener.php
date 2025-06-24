<?php
header("Content-Type: application/json"); //content-type a json
require_once "../db.php";   //incluye la clase db

$sql = "SELECT * FROM usuarios"; //consulta
$stmt = $pdo->query($sql); //ejecuta la consulta
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //devuelve el json

echo json_encode($usuarios);    //devuelve el json
?>