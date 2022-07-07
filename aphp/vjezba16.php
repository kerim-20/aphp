<?php

if(!empty($_FILES)){

    $image_types = array('image/png', 'image/jpg', 'image/jpeg',
    'image/gif', 'image/webp');
    for($i = 0; $i < count($_FILES['image']['name']); $i++ ){
        if($_FILES['image']['size'] [$i] < 0){
            $result[$i] = "Error1: Wrong file size - File doesnt have
            content.";
        }else if($_FILES['image']['size'] [$i] > 10000000){
            $result[$i] = "Error2: Wrong file size - File is to big.";
        }else if(!in_array($_FILES['image']['type'] [$i], $image_types)){
                $result[$i] = "Error3: Wrong file you sent.You can only use
                JPEG, JPG, PNG, GIF or WEBP image types.";
        }else if(!in_array(mime_content_type($_FILES['image']
        ['tmp_name'] [$i]), $image_types)){
            $result[$i] = "Error3: Wrong file you sent.You can only use
            JPEG, JPG, PNG, GIF or WEBP image types.";
        }else{
            $image = explode(".", $_FILES['image']['name'] [$i]);
            $image_name = md5($image[0] . date('d-m-Y H:i:s'));
            $image_full = $image_name . "." . $image[1];
    
    
            if(move_uploaded_file($_FILES['image']['tmp_name'] [$i], $_FILES
           ['image']['name'][$i] )){
               $result[$i] = "File uploaded";
           }else{
               $result[$i] = "Error4: Can't upload file.";
           }
        }
    }

   
}else{
    $result[0] = "Please upload your image";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
   <label for="image">Select image to upload</label>
   <input type="file" name="image[]" multiple>
   <br>
   <input type="submit" value="Upload Image">
    </form>

 <h2>  
     <?php
    for($i = 0; $i < count($result); $i++){
        echo "Result" . $i . ":" . $result[$i] . "<br>";
    }
     ?>
 </h2>
</body>
</html>