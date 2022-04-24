<?php

//set a cookie
setcookie('name','Justin', time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//to unset, you set it to expire in the past
setcookie('name','',time() - 86400);

?>