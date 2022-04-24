<?php
//sort of sanitizes the input
$string2 = '<script>alert(123)</script>';
echo htmlspecialchars($string2);

//%s is a string identifier, they just go in order
printf('%s likes to %s', 'Justin', 'eat');
//%d is digit, %f is float, etc...


?>