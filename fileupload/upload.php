
    <?php

if (isset($_POST['submit'])) {
    $f_name =  $_FILES['file']['name'];
    $f_tmp = $_FILES['file']['tmp_name'];
    $store = "../upload/".$f_name;
if (
    move_uploaded_file($f_tmp, $store)) {
    echo 'file Uploded';
}

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
      <p>  <input type="file" name="file"></p>
      <p><input type="submit" value="upload" name="submit" ></p>
    </form>


</body>
</html>