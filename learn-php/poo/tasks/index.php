<?php

require_once('../app/models/task.php');

$task = new Task();

$listTasks = $task->getAllTasks();

print_r($listTasks[0]['content']);

