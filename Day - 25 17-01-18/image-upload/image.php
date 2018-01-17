<?php
    $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan-image');


    if (isset($_POST['btn'])){
    $imageName = $_FILES['image_file']['name'];
    $directory = 'images/';
    $imageUrl = $directory.$imageName;

    $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
    $fileSize = $_FILES['image_file']['size'];
    $check = getimagesize($_FILES['image_file']['tmp_name']);
        if ($check){

            if (file_exists($imageUrl)){
                die('File already exist. Please try another');
            }else{

                if ($fileSize > 1048576){
                    die('image size is too large. Please select with in 1 mb');
                }else{
                    if ($fileType != 'jpg' && $fileType !='png'){
                        die('File type is not valid. Please Select jpg or png');
                    }else{
                        move_uploaded_file($_FILES['image_file']['tmp_name'], $imageUrl);
                        $sql = "INSERT INTO images (image_file) VALUE ('$imageUrl')";
                        mysqli_query($link, $sql);
                        echo 'image upload & save Successfully..!!';
                    }
                }
            }

        }else{
            die('Please select a valid image file. Thanks..!!');
        }
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select Image</th>
            <td><input type="file" name="image_file"> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"> </td>
        </tr>
    </table>
</form>


<hr/>
<hr/>

<?php
    $sql = "SELECT * FROM images";
    $queryResult = mysqli_query($link, $sql);



?>
<table>
    <?php while ($row = mysqli_fetch_assoc($queryResult)) { ?>
    <tr>
        <td>
            <img src="<?php echo $row['image_file'] ?>" alt="upload-image" height="100" width="100"/>
        </td>
    </tr>

    <?php } ?>
</table>