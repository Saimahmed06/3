<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image" /> <br> <br>
<input type="submit"/>
</form>
</body>
</html>
<?php

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_type=$_FILES['image']['type'];
    $file_tmp=$_FILES['image']['tmp_name'];
    if(move_uploaded_file($file_tmp,"upload/".$file_name)){
        echo "uploaded sucessfull";
    } else{
        echo "try again";
    }
}
$sql=INSERT INTO `image`(`id`, `image_url`) VALUES ('$id','[value-2]');


?>