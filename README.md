
```markdown
# To-Do List Application (PHP)

A simple to-do list application built with PHP that stores tasks in a JSON file instead of a database. Users can add tasks, mark them as completed, and delete them.

## Features
- Add new tasks
- Mark tasks as completed
- Delete tasks
- No database required (uses a `tasks.json` file for storage)

## Technologies
- PHP
- JSON file for task storage (no MySQL required)
- HTML/CSS for the front-end

## Installation
1. Clone the repository:
   ```
   git clone https://github.com/Juliusmidega3/to-do-list.git
   cd to-do-list
   ```

2. Start a local PHP server:
   ```
   php -S localhost:8000
   ```

3. Visit `http://localhost:8000` in your browser.

## Usage
1. **Add Task**:
   - Click on the "Add a Task" link at the top of the page to add a new task.
   - Enter the task name and submit the form.

2. **Mark Task as Completed**:
   - Once a task is added, you can click on the "Complete" link next to the task to mark it as completed.
   - Completed tasks will be displayed with a green "Completed" status.

3. **Delete Task**:
   - To delete a task, simply click the "Delete" link next to the task you want to remove.

## File Structure
```
to-do-list/
├── index.php            # Main file to view tasks and manage them
├── add_task.php         # File to add a new task
├── delete_task.php      # File to delete a task
├── complete_task.php    # File to mark a task as completed
├── tasks.json           # JSON file where tasks are stored
├── style.css            # Styles for the application
└── README.md            # This readme file
```

### Files Explanation:
- **`index.php`**: Displays the list of tasks, and links to add, delete, or mark tasks as completed.
- **`add_task.php`**: Handles the task addition form.
- **`delete_task.php`**: Deletes a task from the `tasks.json` file.
- **`complete_task.php`**: Marks a task as completed by updating its status in the `tasks.json` file.
- **`tasks.json`**: Stores all tasks in a JSON format. No database is required.
- **`style.css`**: Optional file to style the application.

## Contributing
Feel free to fork the repository and submit pull requests for any improvements or bug fixes.

## License
This project is open source and available under the MIT License.
```

You can now use this updated README for your GitHub repository. Just replace the previous one with this in your project.

Let me know if you need any further adjustments!
