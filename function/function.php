<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php

/* Simple function
    function user(){
        $name = "Fernando";
        $age = 24;

        echo $name, $age;
    }

 user();

 */
 /* Function with Arguments

 function myfunc ($name, $age){
    echo "My name is ". $name, " and age is ".$age;
 }

 myfunc("Fernando", 24)

 */

 /*Functions with Default Argument Value */

//  function myfunc ($v=24){
//     echo $v;
//  }
//  myfunc();

function myfunc ($x, $y){
    $z=$x+$y;

    return $z;
}

$abc = myfunc(24, 30);

echo $abc +3;
?>
</body>
</html>