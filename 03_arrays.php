<?php
//simple array
$numbers = [1,2,3,4,5];
$fruits = array('apple','pear','grape');

print_r($fruits);
var_dump($fruits);
echo $fruits[1];

//associative array
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'yellow'
];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

$person = [
    'first_name' => 'Justin',
    'last_name' => 'Dreher',
    'age' => 28
];
echo $person['first_name'];

$people = [
    [
        'first_name' => 'Justin',
        'last_name' => 'Dreher',
        'age' => 28
    ],
    [
        'first_name' => 'Tim',
        'last_name' => 'Dreher',
        'age' => 28
    ],
    [
        'first_name' => 'Joe',
        'last_name' => 'Dreher',
        'age' => 28
    ]
    ];
echo $people[1]['age'];
//display as json
var_dump(json_encode($people));

?>