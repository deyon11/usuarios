<?php
$host = "localhost";
$db = "mi_basedatos";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);    //crea la conexión
} catch (PDOException $e) {    //captura los errores
    echo json_encode(["error" => "Error en la conexión: " . $e->getMessage()]);    //devuelve el json
    exit;
}
?>
