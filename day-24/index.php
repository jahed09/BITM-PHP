<?php
//echo"<pre>";
//print_r($_POST);
//
//print_r($_FILES);


if(isset($_POST['btn']))
{
    $fileName = $_FILES ['image_file']['name'];
    $directory = 'images/';
    $imageUrl = $directory.$fileName;
    $fileSize = $_FILES['image_file']['size'];
    $fileType = pathinfo($_FILES['image_file']['name'],PATHINFO_EXTENSION);
    $check = getimagesize($_FILES['image_file']['tmp_name']);
//echo '<pre>';
//print_r ($check);

    if($check){

            if(file_exists($imageUrl)){
                die('This is already exist.Please chose another file');
            }else{
                if($fileSize > 5000000){
                    die ('file size is too large . Pls use within 10kb');
                }else{

                        if($fileType != 'jpg' && $fileType != 'png'){
                            die('File type is not valid. Please upload jpg or png file');
                        }else{
                            move_uploaded_file($_FILES ['image_file']['tmp_name'], $imageUrl);
                            return 'success';
                        }
                }
            }

    }else {
        die('please select an image file.thanks...');
    }

}







?>



<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select Image</th>
            <td><input type="file" name="image_file" accept="image/*"></td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Üpload"></td>
        </tr>
    </table>
</form>
