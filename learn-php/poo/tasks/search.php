<?php

require_once('../app/models/task.php');

$task = new Task();

$listTasks = $task->searchTasks($_GET['search']);

print_r($listTasks);

