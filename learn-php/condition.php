<?php

//   $note = 9;

//   if ($note > 16) {
//       echo "Excellent";
//   }
//   else if ($note > 13) {
//       echo "bien";
//   }
//   else if ($note > 11) {
//       echo "assez bien";
//   }
//   else if ($note >= 10) {
//       echo "Pas Mal";
//   }
//   else {
//       echo "annee prochaine";
//   }

$courses = [
    ['title' => 'Learn Laravel', 'price' => 40],
    ['title' => 'Learn Symfony', 'price' => 39],
    ['title' => 'Learn NodeJS', 'price' => 60],
    ['title' => 'Learn ReactJS', 'price' => 20],
    ['title' => 'Learn Angular', 'price' => 30]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Flag ship Courses</h1>

    <ul>
        <?php foreach($courses as $course) { ?>
            <?php if($course['price'] < 40) { ?>
                <li><?php echo $course['title']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>