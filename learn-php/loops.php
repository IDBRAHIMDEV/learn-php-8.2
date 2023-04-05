<?php
    //$courses = ['laravel', 'php', 'javascript'];

    // for($i = 0; $i < count($courses); $i++) {
    //     echo $courses[$i] . '<br />';
    // }

    // $i = 0;
    // while( $i < count($courses) ) {
    //          echo $courses[$i] . '<br />';
    //          $i++;
    // }

    $courses = [
        ['title' => 'Learn Laravel', 'price' => 40],
        ['title' => 'Learn Symfony', 'price' => 39],
        ['title' => 'Learn NodeJS', 'price' => 60],
        ['title' => 'Learn ReactJS', 'price' => 20],
        ['title' => 'Learn Angular', 'price' => 30]
    ];

    foreach($courses as $course) {
        echo $course['title'] . ' - ' . $course['price'] . '<br />';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>List of courses</h1>

    <ul>
        <?php foreach($courses as $course) { ?>
            <li><?php echo $course['title'] ?> - <?php echo $course['price']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
