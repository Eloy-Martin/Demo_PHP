<?php
    require_once 'db.php';

    // 1. Recoger y validar
    $id_person = filter_input(INPUT_POST, 'choose_person_delete', FILTER_VALIDATE_INT);
    
    if ($id_person === false) {
        exit('Selección inválida');
    }

    // 2. Preparar el delete SQL
    $sql = "DELETE FROM people WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $data = [
        ':id' => $id_person
    ];

    // 3. Ejecutar la consulta
    $stmt->execute($data);

    // 4. Redirigir a index.php
    header("Location: ../index.php");
    exit();
?>