# Task Manager Pro

A modern, responsive, Kanban-style task management web application built with PHP, MySQL, Vanilla JavaScript, and CSS.

## Features

- **Kanban Board:** Drag and drop tasks between "To Do", "In Progress", and "Done" columns.
- **Subtasks (Checklists):** Add dynamic checklist items directly inside tasks to track granular progress.
- **Soft Deletion & Trash Bin:** Safely delete tasks and restore them later from the Trash popup.
- **Real-time Search:** Filter tasks instantly by title, description, or category without page reloads.
- **Modern UI & Responsiveness:** Fully mobile-friendly interface with responsive modals, color-coded priority badges, and toast notifications.
- **Secure Authentication:** Features secure user registration and login utilizing `password_hash()` and database prepared statements.

## Tech Stack

- **Frontend:** HTML5, CSS3, Vanilla JavaScript (ES6+), Fetch API
- **Backend:** PHP 8+
- **Database:** MySQL (Object-Oriented `mysqli` with Prepared Statements)

## Setup Instructions

1. Place the project folder into your local server root (e.g., `c:\wamp64\www\taskmanagement\`).
2. Create a MySQL database named `task_manager`.
3. Ensure `config/db.php` has your correct database credentials (default is `root` with no password).
4. Navigate to `http://localhost/taskmanagement/auth/login.php` in your browser.
5. **Automatic Setup:** The application will automatically construct all necessary database tables (`users`, `tasks`, `subtasks`) when you register an account and log in.

## Folder Structure

- `/api/` - Backend API endpoints for fetching, saving, restoring, and deleting data via AJAX.
- `/assets/` - Contains project styles (`style.css`) and client-side logic (`app.js`).
- `/auth/` - Contains authentication flows (`login.php`, `register.php`, `logout.php`) and the main board UI (`dashboard.php`).
- `/config/` - Database connection handling and automatic table generation scripts.