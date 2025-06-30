<?php
    require_once 'db.php';

    // 1. Recoger y validar
    $name = filter_input(INPUT_POST, 'enter_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age  = filter_input(INPUT_POST, 'enter_age',  FILTER_VALIDATE_INT);

    if (!$name || $age === false) {
        exit('Datos inválidos');
    }

    // 2. Preparar la consulta SQL
    $sql = "INSERT INTO people (name, age) VALUES (:name, :age)";
    $stmt = $pdo->prepare($sql);

    $data = [
        ':name' => $name,
        ':age' => $age
    ];

    // 3. Ejecutar la consulta
    $stmt->execute($data);
?>