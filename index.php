<?php
// Load tasks from the JSON file
$tasks = json_decode(file_get_contents('tasks.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    // Add a new task
    $task = ['name' => $_POST['task'], 'completed' => false];
    $tasks[] = $task;
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
    header('Location: index.php');
}

if (isset($_GET['complete'])) {
    // Mark task as completed
    $taskIndex = $_GET['complete'];
    $tasks[$taskIndex]['completed'] = true;
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
    header('Location: index.php');
}

if (isset($_GET['delete'])) {
    // Delete task
    $taskIndex = $_GET['delete'];
    array_splice($tasks, $taskIndex, 1);
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
    header('Location: index.php');
}
?>

<h1>To-Do List</h1>
<form method="POST">
    <input type="text" name="task" placeholder="Enter a new task" required>
    <button type="submit">Add Task</button>
</form>

<ul>
    <?php foreach ($tasks as $index => $task): ?>
        <li>
            <?= htmlspecialchars($task['name']) ?> 
            <?= $task['completed'] ? '<span style="color:green;">(Completed)</span>' : '<a href="?complete=' . $index . '">Complete</a>' ?>
            <a href="?delete=<?= $index ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
