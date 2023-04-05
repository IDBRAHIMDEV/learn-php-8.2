<?php 

$nameOfCompany = "RPMP";

$firstName = "Hind";
$lastName = "HOUFIR";

$rayon = 4;
$pi = 3.14;

/* $surface =  $pi * $rayon ** 2;

 $count = strlen($firstName);

$fullName = "{$firstName} count: $count, surface : {$pi}";
*/ 


// echo $fullName;

//+ - / * ** %

// var_dump(1 == "1");
// echo "<br>";
// var_dump(1 === "1");
// echo "<br>";
// var_dump(1 != "1");
// echo "<br>";
// var_dump(1 <> "1");
// echo "<br>";
// var_dump(1 !== "1");
// echo "<br>";
// var_dump(1 >= "1");
// echo "<br>";
// var_dump(1 <= "1");
// echo "<br>";
// var_dump(300 <=> 200);
// echo "<br>";

//$persons = array("Hind", "Abdeljalil", "Abderrahim", "Hanane", "Ihsan");
$persons = ["Hind", "Abdeljalil", "Abderrahim", "Hanane", "Ihsan"];

// for($i = 0; $i < count($persons); $i++) {
//     echo $persons[$i], '<br>';
// }

// foreach($persons as $cle => $person) {
//     echo "key: $cle, value: $person <pre>";
// }


// $counter = 0;
// while($counter < count($persons)) {
//     echo $persons[$counter], '<br>';
//     $counter++;
// }

// $counter = 0;

// echo ++$counter;
// echo $counter;


// $persons[7] = "Mohamed"; 
// $persons[] = "IDBRAHIM"; 
// $persons[6] = "IDBRAHIM"; 
// $persons[] = "jILALI"; 
// $persons["name"] = "Khalid"; 


$persons = [
 ["name" => "Hind", "age" => 20, "email"=> "hind@email.com"],
 ["name" => "Abdeljalil", "age" => 25, "email"=> "adeljalil@email.com"],
 ["name" => "Abderrahim", "age" => 22, "email"=> "Abderrahim@email.com"],
 ["name" => "Hanane", "age" => 21, "email"=> "Hanane@email.com"],
 ["name" => "Ihsan", "age" => 19, "email"=> "Ihsan@email.com"]
];

foreach($persons as $person) {

    // if($person['age'] <= 20) {
    //     continue;
    // }
        foreach($person as $key => $value) {
            echo "$key is $value, ";
        }

    echo '<br>';

    if($person['name'] == "Abderrahim") {
        break;
    }

}

// echo '<pre>', print_r($persons[2]), '</pre>';


// echo "<pre>", print_r($persons), "</pre>";

// echo $persons[3];

// $persons[3] = "Hanane KALKHA";

// $persons[] = "Mohamed IDBRAHIM";

// array_push($persons, "Youssef");

// echo "<br>";

// $persons = ["Karim", ...$persons];

// echo "<br>";

// echo "<pre>", print_r($persons), "</pre>";





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nameOfCompany ?></title>
</head>
<body>
    <h1>Welcome to <?php echo $nameOfCompany ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur. <?php echo $nameOfCompany ?> company</p>

    <a href="https://pmp.ma"><?php echo $nameOfCompany ?> website</a>
</body>
</html>


Complexité - Heuristique - Meta heuristique