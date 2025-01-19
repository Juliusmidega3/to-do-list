<?php
if (isset($_GET['delete'])) {
    // Load existing tasks from the JSON file
    $tasks = json_decode(file_get_contents('tasks.json'), true);

    // Get task index to delete
    $taskIndex = $_GET['delete'];

    // Remove task from the array
    array_splice($tasks, $taskIndex, 1);

    // Save the updated task list to tasks.json
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));

    // Redirect to the main page
    header('Location: index.php');
    exit;
}
