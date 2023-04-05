<?php

require_once("./models/course.php");
include('./library/helpers.php');

$course = new Course();

if($course->delete($_GET['id'])) {
    redirect('home.php');
}