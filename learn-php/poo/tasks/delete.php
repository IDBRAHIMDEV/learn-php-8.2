<?php

require_once('../app/models/task.php');

$task = new Task();

$listTasks = $task->deleteTask(1);