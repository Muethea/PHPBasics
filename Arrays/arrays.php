<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h1>
<?php
    // $produts = array (
    //     'Macbook',
    //     'Galaxy Tablet',
    //     'Google Pixel'
    // );

    // // print_r($produts);
    // echo $produts[2];

    // //Associative arrays - Arrays with named keys
    //       $produts = array (
    //     'Macbook' =>113000,
    //     'Galaxy Tablet' =>800,
    //     'Google Pixel' =>12000
    //       );
    //       echo $produts['Macbook'];
    // //   print_r($produts)


    //Multidimensional arrays

    $produts = 
    array ('Macbook' => array 
    ('Sales produt'=>500, 'price'=> 1200, 'Category'=>'Computer'),

    'Google Pixel' => array 
    ('500', '650', 'Mobile'),


    'Google Tablete' => array 
    ('500', '800', 'Tablet'),
    
);

echo $produts['Macbook']['Sales produt']
// print_r($produts)
    ?>

        </h1>
</body>
</html>