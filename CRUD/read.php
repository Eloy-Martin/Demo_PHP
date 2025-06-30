<?php
session_start();
include_once 'db.php';

    $message = '';

    $id_person = filter_input(INPUT_POST, 'choose_person', FILTER_VALIDATE_INT);
    
    if ($id_person === false) {
        exit('Selección inválida');
    }

    // 1. Preparar la consulta SQL
    $sql = "SELECT name, age FROM people WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // 2. Ejecutar la consulta
    $stmt->execute([':id' => $id_person]);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);

    // 3. Procesar el resultado
    if ($person) {
        $message = "Name: " . htmlspecialchars($person['name']) . ", Age: " . htmlspecialchars($person['age']);
    } else {
        $message = "Unable to find person with ID: $id_person";
    }
    // 4. guardar el mensaje en una variable de sesión para luego inyectarlo en <p name="message">
    $_SESSION['consult_msg'] = $message;

    // 5. Redirigir a index.php
    header("Location: ../index.php");
    exit();

?>