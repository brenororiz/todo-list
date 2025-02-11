<?php
// add_task.php

require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = trim($_POST['task']);

    if (!empty($task)) {
        $query = "INSERT INTO tasks (task) VALUES (:task)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':task', $task);
        $stmt->execute();
    }
}

header('Location: index.php');
exit;
?>