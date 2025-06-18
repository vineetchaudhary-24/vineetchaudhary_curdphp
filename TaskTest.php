<?php
require_once '../api/config/Database.php';
require_once '../api/models/Task.php';

$db = (new Database())->connect();
$task = new Task($db);

// Test Create
$task->title = "Unit Test Task";
$task->description = "Created by test case.";
assert($task->create() === true);
?>
