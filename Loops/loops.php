<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php

    // $x =0;

    // while ($x <= 10) {
    //     echo '</br>'. $x;
    //     $x++;
    // }

    // $a= 1;
    // do {
    //    echo "</br>" .$a;
    //    $a++;
    // } while ($a <= 10);


    // for ($i=0; $i <10 ; $i++) { 
    //    echo '</br> '.$i;
    // }

    $produts = array (
            'Macbook' =>113000,
            'Galaxy Tablet' =>800,
            'Google Pixel' =>12000
              );

    foreach ($produts as $name => $value) {
        echo $name."Price is ". $value."<br/>";

    }

?>
</body>
</html>