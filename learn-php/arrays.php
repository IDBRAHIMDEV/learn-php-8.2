<?php 

 // Indexed Arrays
  $people = ["Mohamed", "Walid", "Basma"];

  $people[2] = "Samira";
  //echo count($people);
  $people[] = "Mouad";

  //array_push($people, "Khalid");

  $people = ["Khalid", ...$people];

  //echo count($people);

  //print_r($people);

  $fruits = array("Banana", "Orange", "Apple");

  $result = ['Waw', ...$people, 'Top', ...$fruits, "Bright Coding"];

  //print_r($result);

  // Associative Arrays

  $contacts = ['mohamed' => '06451214574', 'walid' => '124578545'];

  //echo $contacts['mohamed'];

  $contacts['samira'] = "087542145";

  //print_r($contacts);

  // multidimension 
  
  $courses = [
      ['title' => 'Learn Laravel', 'price' => 40],
      ['title' => 'Learn Symfony', 'price' => 39],
      ['title' => 'Learn NodeJS', 'price' => 60],
      ['title' => 'Learn ReactJS', 'price' => 20],
      ['title' => 'Learn Angular', 'price' => 30]
  ];

$courses[2]['title'] = "Learn MERN";

$courses = [['title' => "Learn SvelteJS", 'price' => 45], ...$courses];

print_r($courses);
