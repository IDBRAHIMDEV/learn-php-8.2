<?php

require_once('../app/models/task.php');

$task = new Task();

print_r($task->getTaskById($_GET['id']));