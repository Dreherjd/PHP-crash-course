<?php

$age = 2;
if($age >= 18){
    echo 'you can vote';
}else{
    echo 'You cannot vote';
}


// $date = date("H");
// if($date < 12) {
//     echo 'Good Morning';
// }else if($date > 12 && $date < 17){
//     echo 'Good Afternoon';
// }else{
//     echo 'Good Evening';
// }

$post = ['First Post'];
// if(!empty($post)){
//     echo $post[0];
// }else{
//     echo 'no posts';
// }

//ternary operator
// echo !empty($post) ? $post[0] : 'no posts';
// echo !empty($post) ? $post[0] : null;

//coalescing operator
//if the right side of the = is not empty, it runs
$firstPost = $post[0] ?? null;
echo $firstPost;

$fav_color = 'red';
switch($fav_color){
    case 'red':
        echo 'Red';
        break;
    case 'yellow':
        echo 'yellow';
        break;
    default:
        echo 'pick a color';
}

?>