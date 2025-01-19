<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    // Load existing tasks from the JSON file
    $tasks = json_decode(file_get_contents('tasks.json'), true);

    // Add a new task
    $task = ['name' => $_POST['task'], 'completed' => false];
    $tasks[] = $task;

    // Save the updated task list to tasks.json
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));

    // Redirect to the main page
    header('Location: index.php');
    exit;
}
?>

<form method="POST">
    <input type="text" name="task" placeholder="Enter a new task" required>
    <button type="submit">Add Task</button>
</form>
