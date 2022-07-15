<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    
<?php
 date_default_timezone_set('Africa/Maputo');
$d = date("d-m-y");

echo $d;

echo "</br>";


echo date("H : i : s a");

?>
</body>
</html>