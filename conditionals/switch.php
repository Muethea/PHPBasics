<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<h1>
<?php

$color = 'pink';
    switch ($color) {
        case 'red':
          {
            echo "color is red";
            break;
        
          } 
          case 'white':
          {
          
                echo "color is white";
                break;
          }
          
          case 'green':
          {
           
                echo "color is green";
                break;
          } 
          default:{
            echo "No color found";
          }
       
    }
?>
</h1>
</body>
</html>