<?php

//variable variables
$name = "mohamed";
$$name = "bright";
$$$name = "coding";

// echo $mohamed;
// echo $bright;

// echo "my brand is ${$$name}";

//========== passage par reference ===========

// $a = 12;
// $b = &$a;

// $b = 20;

// echo $a;
// echo "<br>";
// echo $b;

//===== error control operator ======

//$a = 12;
// (@include("library.php")) or die('library not found !');

// $b = @$a or die('a variable not found !');

// echo $b;

// $myFile = @file("names1.txt") or die('the is not exist !');

// echo '<pre>', print_r($myFile), '</pre>';

// ====== include and require =======

// include_once("library.php");

// echo $a;

// $a = 30;
// echo "<br>";

// include_once("library.php");
// echo $a;

// === Functions ====

// function greeting($firstName = "a", $lastName = "b", $gender = "Male") {
//     return "Salam $firstName $lastName, $gender <br>";
// }

// $result = greeting(lastName: 'c');

// var_dump($result);

// echo $result;


// ===========

// function add(...$elements) {

//     $somme = 0;
//     foreach($elements as $element) {
//         $somme += $element;
//     }
//     return $somme;
// }


// $data = [12, 23, 34, 12];
// $func = "add";
// $result = $func(...$data);

// echo "result : $result";

// function doubleElement($element) {
//     return $element * 2;
// }

// $elements = [12, 3, 4, 56, 100];

// $result = array_map(fn($element) => $element * 2, $elements);

// echo '<pre>', print_r($result), '</pre>';

// $add = function($a, $b) {
//     return $a + $b;
// };

// echo $add(12, 13);

// $age = 12;

// function changeAge(&$age) {
//     $age = 13;
//     echo "internal age : $age <br>";
// }

// changeAge($age);
// echo "external $age";


$resumer = function($name, $job, ...$skills) {
    echo "my name is : {$name} and my job is {$job} <br>";

    foreach($skills as $skill) {
        echo "- {$skill} <br>";
    }
};

$mySkills = ['Angular', 'React', 'Php'];
$resumer('Mohamed IDBRAHIM', 'Instructor', ...$mySkills);





