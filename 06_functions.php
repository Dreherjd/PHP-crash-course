<?php

//these are the arguments
function registerUsers($email){
    echo $email . 'user registered';
}

//these are the parameters
// registerUsers('email@email');

function sum($n1 = 4,$n2 = 5){

    return $n1 + $n2;
}

$number = sum(10,12);
$number2 = sum();
echo $number;
echo $number2;


$subtract = function($n1,$n2){
    return $n1 - $n2;
};

echo $subtract(10, 2);

//valid function syntax
$multiply = fn($n1,$n2) => $n1 * $n2;

echo $multiply(9,9);
?>