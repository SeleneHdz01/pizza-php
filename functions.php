<?php
$blogs = [
    ['title' => 'Sels party', 'author' => 'Sel', 'content' =>'hard', 'likes'=> 50],
    ['title' => 'Luiss party', 'author' => 'Luis', 'content' => 'boring', 'likes' => 60],
    ['title' => 'Ricardos party', 'author' => 'Ricardo', 'content' =>'sad', 'likes' => 40]
];
function sayHello($name = 'SEL', $time = 'night'){
    echo "Good $time $name ";
}
//sayHello('Luis', 'morning');

function formatBlog($blogs){
    //echo "{$blogs['author']} cantidad de likes {$blogs['likes']} de la fiesta <br />";
    return "{$blogs['author']} cantidad de likes {$blogs['likes']} de la fiesta <br />";
}
/* $formatted = formatBlog(['author' => 'Luis', 'likes' => 60]);
echo $formatted; */

/**VARIABLE SCOPE */

/**LOCAL VARS */

?>
