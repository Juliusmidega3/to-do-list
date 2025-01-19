<?php
// Load tasks from the JSON file
$tasks = json_decode(file_get_contents('tasks.json'), true);
?>

<h1>To-Do List</h1>

<!-- Link to the Add Task page -->
<a href="add_task.php">Add a Task</a>

<ul>
    <?php foreach ($tasks as $index => $task): ?>
        <li>
            <?= htmlspecialchars($task['name']) ?> 
            <!-- If task is not completed, provide a link to mark it as completed -->
            <?= $task['completed'] ? 
                '<span style="color:green;">(Completed)</span>' : 
                '<a href="complete_task.php?complete=' . $index . '">Complete</a>' 
            ?>
            <!-- Link to delete a task -->
            <a href="delete_task.php?delete=<?= $index ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
