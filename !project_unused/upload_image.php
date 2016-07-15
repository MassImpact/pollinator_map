<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploading Images</title>
</head>
<body>

<form action="upload_image.php"  method="post" enctype="multipart/form-data">

    Select Image:
    <input type="file" name="image">
    <input type="submit" name="upload" value="Upload Now">

</form>
<?php
if(isset($_POST['upload'])){
    echo $image_name=$_FILES['image']['name'];
    echo $image_type=$_FILES['image']['type'];
    echo $image_size=$_FILES['image']['size'];
    echo $image_tmp_name=$_FILES['image']['tmp_name'];

    if($image_name==''){
    echo "<script>alert('Please select an image')</script>";
    exit();

    }
    else
    move_uploaded_file ($image_tmp_name,"photos/$image_name");
    echo "Image uploaded sucessfully";
    echo "<img src='photos/$image_name'>";

    }

?>
</body>
</html>