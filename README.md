# To-do List Manager (Core PHP CRUD App)

## Overview
A simple CRUD app using Core PHP (OOP), MySQL, Bootstrap 5, and JavaScript.

## Features
- Create, Read, Update, Delete tasks
- Bootstrap 5 responsive UI
- Uses Fetch API for AJAX
- Secure input handling and prepared statements

## Setup Instructions
1. Import `database.sql` into your MySQL server.
2. Configure DB in `api/config/Database.php`.
3. Place project in your localhost server (e.g., XAMPP htdocs).
4. Open `frontend/index.html` in browser.

## API Endpoints
- `GET /api/controllers/TaskController.php` - Get all tasks
- `GET /api/controllers/TaskController.php/{id}` - Get task by ID
- `POST /api/controllers/TaskController.php` - Create task
- `PUT /api/controllers/TaskController.php/{id}` - Update task
- `DELETE /api/controllers/TaskController.php/{id}` - Delete task

## Testing
Run test:
```bash
php tests/TaskTest.php
```
