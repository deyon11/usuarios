<?php
header("Content-Type: application/json"); //content-type a json
require_once "../db.php";   //incluye la clase db

$sql = "SELECT * FROM usuarios"; //consulta
$stmt = $pdo->query($sql); //ejecuta la consulta
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //devuelve el json

echo json_encode($usuarios);    //devuelve el json
echo json_last_error_msg(); //devuelve el error
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD</title>
</head>
<body>
    
</body>
</html>