<?php
include('config/db.php');
if (!isset($_SESSION['user_id'])) header("Location: auth/login.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Task Manager</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    Task Manager
    <a href="auth/logout.php" style="float:right;color:white;">Logout</a>
</header>

<button class="add-btn" onclick="openModal()">+ Add Task</button>

<div class="board">
    <div class="column" id="todo"><h3>To Do</h3></div>
    <div class="column" id="in_progress"><h3>In Progress</h3></div>
    <div class="column" id="done"><h3>Done</h3></div>
</div>

<div id="taskModal" class="modal">
    <div class="modal-content">
        <form id="taskForm">
            <input type="hidden" name="id" id="taskId">
            <input name="title" id="title" required placeholder="Title">
            <textarea name="description" id="description"></textarea>

            <select name="priority" id="priority">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>

            <input type="date" name="due_date" id="due_date">
            <input name="category" id="category" placeholder="Category">

            <button>Save</button>
            <button type="button" onclick="closeModal()">Cancel</button>
        </form>
    </div>
</div>

<script src="assets/js/app.js"></script>
</body>
</html>