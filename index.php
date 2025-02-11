<?php
// index.php

require_once 'db_config.php';

// Buscar todas as tarefas do banco de dados
$query = "SELECT * FROM tasks ORDER BY created_at DESC";
$stmt = $pdo->query($query);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>

        <!-- Formulário para adicionar nova tarefa -->
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Digite sua tarefa" required>
            <button type="submit" disabled>Adicionar</button>
        </form>

        <!-- Lista de tarefas -->
        <ul>
            <?php if (empty($tasks)): ?>
                <li class="empty-message">Nenhuma tarefa encontrada.</li>
            <?php else: ?>
                <?php foreach ($tasks as $task): ?>
                    <li>
                        <?= htmlspecialchars($task['task']) ?>
                        <form action="delete_task.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $task['id'] ?>">
                            <button type="submit" class="delete-btn">Excluir</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>