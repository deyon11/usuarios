<?php
header("Content-Type: application/json");
require_once "../db.php";

$datos = json_decode(file_get_contents("php://input"), true); //recibe el json

if (isset($datos["nombre"])) {
    $sql = "INSERT INTO usuarios (nombre) VALUES (:nombre)"; //creación de la consulta
    $stmt = $pdo->prepare($sql); //prepara la consulta
    $stmt->execute(["nombre" => $datos["nombre"]]); //ejecuta la consulta

    echo json_encode(["mensaje" => "Usuario creado"]); //devuelve el json
} else {
    echo json_encode(["error" => "Falta el nombre"]);    //devuelve el json

}
?>