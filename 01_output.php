<?php
//says hello
echo 'Hello';

/**
 * this is a multi line comment
 */
echo 'this is an echo';


echo 'Hello', 123, 10;

//can't take multiple values
print 'Hello';

//can print arrays
print_r([1,2,3]);

//prints data type and length (if applicable)
var_dump('Hello');

var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= 'Hello'; ?></h3>
</body>
</html>