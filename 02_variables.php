<?php
//can be single or double quotes
 echo 'This is a string';

$name = 'Justin';
$age = 28;
//when echoing, if it's false it won't show anything
$has_kids = false;
$cash_on_hand = 13.58;

//using single quotes, you have to use concantonation
echo $name . ' is ' . $age . ' years old';
//you can just send them with double quotes
echo "$name is $age years old";
//TS style works too
echo "${name} is ${age} years old";

//constants use the define function
define('HOSTNAME','localhost');
echo HOSTNAME;



?>