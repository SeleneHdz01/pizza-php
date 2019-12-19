<?php 
//$strOne = 'Mi correo es: ';
//$strTwo = 'selene@4040apps.com ';
//$name = 'Selene';
//echo $strOne.$strTwo;
//echo 'Mi email es: ' . $strTwo;
//echo "Hola mi nombre es: $name"
//echo $name[0];
//echo strlen($name);
//echo strtoupper($name);
//echo str_replace('S', 'a', $name);
//$radius = 25;
//$pi = 3.14;
// basic operators: *,/,+,-,**,
//echo $pi * $radius**2;

//Order Operation (B I D M A S)
//echo 2*(4+9)/3;

//Increment & Decrement operators
/* $radius--;
echo $radius; */

//Shorthand operators
//$age = 20;
//$age += 10;
//$age = $age * 2;
//$age *= 2;
//echo $age;
//echo floor($pi);
//redondear fracciones hacia arriba
//echo ceil($pi);
//echo pi();
/**INDEXED ARRAYS */

//$peopleOne = ['sel', 'march', 'luis'];

//echo $peopleOne[1]
//$peopleTwo = array('yosmi', 'alex');
//echo $peopleTwo[1];
//$ages = [20,30,40,50];
//print_r($ages) ;


//$ages[1] = 25;
//$ages[] = 60;
//array_push($ages, 70);
//print_r($ages);
//echo count($ages);
//$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

/**ASSOCIATIVE ARRAYS  (key & valu pairs)*/

//$teamCuarenta = ['sel' => 'black', 'march' => 'red', 'luis' => 'blue'];
//echo $teamCuarenta['sel'];
//print_r($teamCuarenta);
//$teamCuarentaTwo = array('chris' => 'white', 'frank' => 'green');
//print_r($teamCuarentaTwo);
//$teamCuarentaTwo['omar']= 'pink';
//print_r($teamCuarentaTwo);
//echo count($teamCuarenta);
//$teamCuarentaAll = array_merge($peopleOne, $peopleTwo);
//print_r($teamCuarentaAll);

/**MULTI-DIMENSIONAL ARRAYS */
/* $blogs = [
    ['title' => 'Sel party', 'author' => 'Sel', 'content' =>'hard', 'likes'=> 50],
    ['title' => 'Luis party', 'author' => 'Luis', 'content' => 'boring', 'likes' => 60],
]; */
//$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 20];
//print_r($blogs);
//$popped = array_merge($blogs);
//$popped = array_pop($blogs);//extrae el último elemento del final del array
//print_r($popped);

/**FOR LOOPS */
//$selenesTeam = ['luis','march','ricardo'];
/* for($i=0; $i < count($selenesTeam); $i++){
echo $selenesTeam[$i] . '<br />';
} */
/* foreach($selenesTeam as $team){
    echo $team .'<br />';
} */

/* $blogs = [
    ['title' => 'Sels party', 'author' => 'Sel', 'content' =>'hard', 'likes'=> 50],
    ['title' => 'Luiss party', 'author' => 'Luis', 'content' => 'boring', 'likes' => 60],
    ['title' => 'Ricardos party', 'author' => 'Ricardo', 'content' =>'sad', 'likes' => 40]
]; */

/* foreach($blogs as $blog){
    if($blog['title'] === 'Luiss party'){
        break;
    }
    if ($blog['likes'] <= 50){
        continue;
    }
    echo $blog['title']. '<br />';
} */

/* foreach($blogs as $blog){
    if ($blog['likes'] < 60 && $blog['likes'] > 40){
        echo $blog['author'] . '<br />';
    }
    if ($blog['likes'] < 60 || $blog['likes'] > 10){
        echo $blog['author'] . '<br />';
    }
} */

/* foreach($blogs as $blog){
    echo $blog['title'] . ' - ' . $blog['author'];
    echo '<br />';
} */
/* $i=0;
while($i < count($blogs)){
    echo $blogs[$i]['author'];
    echo '<br />';
    $i++;
} */

/**Comparisons booleans (true or false) */
//echo true;
//echo false; ""
/**NUMBERS COMPARISONS*/
//echo 5 < 10;
//echo 5 > 10;
//echo 5 == 10;
//echo 10 != 10;
//echo  5 <= 10;
//echo  5 >= 5;

/**STRINGS */
//echo 'sel' > 'luis';
//echo 'sel' < 'luis';
//echo 'sel' > 'Luis';
//echo 'sel' == 'Sel';
/**loose vs strict equal comparison */
//echo 5 === 5;
//echo 5 === '5';
//echo true == "1";
//echo false === "";

/**CONDITIONAL STATEMENTS */
/* $price = 20;

if ($price < 10){
    echo 'la condición se cumple ';
}elseif($price > 50){
    echo 'se cumple la condición elseif ';
}else{
    echo 'la condición no se cumple';
} */
//FUNCIONES
/* function sayHello($name = 'luis'){
    echo "Hello word $name";
}
sayHello(); */

/* function formatBlog($blogs){
    echo "{$blogs['author']} cantidad de likes{$blogs['likes']}";
}
formatBlog(['name' => 'Luis'], ['likes' => '100']); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>Ttitulos de las fiestas</h1>
    <ul>
        <?php //foreach($blogs as $blog){?>
            <h3><?php //echo $blog['title']; ?></h3>
            <p>Autor: <?php //echo $blog['author'];?></p>
        <?php //}?>
    </ul> 
    <div>
        <ul>
            <?php //foreach($blogs as $blog){?>
                <?php //if ($blog['likes'] > 30){?>     
                    <li><?php //echo $blog['likes'] . '<br />'?></li>
                <?php //}?>
            <?php //}?>
        </ul>
    </div>
</body>
</html>

