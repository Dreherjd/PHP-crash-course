<?php

//Superglobals all start with an underscore
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitchin'</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST'];  ?></li>
        <li>Document Root: <?php echo $_SERVER['SERVER_NAME'] ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT'] ?></li>
        <li>Document Root: <?php echo $_SERVER['PHP_SELF'] ?></li>
        <li>Document Root: <?php echo $_SERVER['SERVER_SOFTWARE'] ?></li>
    </ul>
</body>
</html>