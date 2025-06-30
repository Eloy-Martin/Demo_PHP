<?php
    require_once 'db.php';

    $sql = "INSERT INTO people (name, age) VALUES (:name, :age)";
    $stmt = $pdo->prepare($sql);

    $data = [
        ':name' => "Maria",
        ':age' => "30"
    ];

    $stmt->execute($data);
?>