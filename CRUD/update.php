<?php
    require_once 'db.php';

    // 1. Recoger y validar
    $selected_person_id = filter_input(INPUT_POST, 'choose_person_update', FILTER_VALIDATE_INT);
    $new_name = filter_input(INPUT_POST, 'update_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $new_age  = filter_input(INPUT_POST, 'update_age',  FILTER_VALIDATE_INT);

    if (!$new_name || $new_age === false) {
        exit('Datos inválidos');
    }

    // 2. Preparar el update SQL
    $sql = "UPDATE people SET name = :name, age = :age WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $data = [
        ':id' => $selected_person_id,
        ':name' => $new_name,
        ':age' => $new_age
    ];

    // 3. Ejecutar el update
    $stmt->execute($data);


    // 4. Redirigir a index.php
    header("Location: ../index.php");
    exit();
?>