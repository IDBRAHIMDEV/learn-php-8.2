<?php

$courses = [
    ['title' => 'Learn Laravel', 'price' => 40],
    ['title' => 'Learn Symfony', 'price' => 39],
    ['title' => 'Learn NodeJS', 'price' => 60],
    ['title' => 'Learn Laravel Free', 'price' => 0],
    ['title' => 'Learn ReactJS', 'price' => 5],
    ['title' => 'Learn Angular', 'price' => 30]
];


function formatCourse($title, $price) {
    
    $priceDollarToMad = convertPrice($price);
    return "$title cost $priceDollarToMad MAD";
}

function convertPrice($price) {
    return $price * 10;
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
        <?php foreach($courses as $course) { 
            
            $status = $course['price'] > 30 ? 'Flagship' : 'Low cost';

            ?>
            <li>
              <h2><?php echo $status; ?></h2>      
            <?php echo formatCourse($course['title'], $course['price']); ?></li>
        <?php } ?>
    </ul>
</body>
</html>