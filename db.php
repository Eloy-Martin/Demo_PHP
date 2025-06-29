<?php

$host   = '127.0.0.1';
$puerto = '3306';
$name_db = 'my_database';
$usuario   = 'root';
$passwd    = '';

//Data Source Name (DSN) para la conexión a la base de datos
$dsn = "mysql:host=$host;port=$puerto;dbname=$nombre_db;charset=utf8";

try {
    // 1. Definimos unas “opciones” para PDO
    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    // 2. Creamos el objeto PDO, que establece la conexión
    $pdo = new PDO($dsn, $usuario, $passwd, $opciones);

} catch (PDOException $e) {
    // 3. Si hay cualquier error (credenciales mal, servidor caído, etc.), caemos aquí
    die("¡Error de conexión!: " . $e->getMessage());
}

?>