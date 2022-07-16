
    <?php

if (isset($_POST['submit'])) {
    $f_name =  $_FILES['file']['name'];
    $f_tmp = $_FILES['file']['tmp_name'];

    $f_size =$_FILES['file']['size'];
    $f_extension = explode('.',$f_name);
    $f_extension = strtolower(end($f_extension));
    $f_newfile = uniqid().'.'.$f_extension;

    $store = "../upload/".$f_newfile;

  if ($f_extension =='jpg' || $f_extension =="png" ) {
    if ($f_size>= 1000000) {
        echo 'Max file should be 1Mb';
    } else {
        if (move_uploaded_file($f_tmp, $store)) {
            echo 'File Uploded';
        }
    }
    
  } else {
    echo 'This is pdf';
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