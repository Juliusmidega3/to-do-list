<?php
if (isset($_GET['complete'])) {
    // Load existing tasks from the JSON file
    $tasks = json_decode(file_get_contents('tasks.json'), true);

    // Get task index to mark as completed
    $taskIndex = $_GET['complete'];

    // Mark task as completed
    $tasks[$taskIndex]['completed'] = true;

    // Save the updated task list to tasks.json
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));

    // Redirect to the main page
    header('Location: index.php');
    exit;
}
