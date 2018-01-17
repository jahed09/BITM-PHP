<?php
namespace App\classes;

use App\classes\Database;
class Blog
{
    public function addBlogInfo($data){



        $imageName = $_FILES['blog_image']['name'];
        $directory = '../assets/images/';
        $imageUrl = $directory.$imageName;

        $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
        $fileSize = $_FILES['blog_image']['size'];
        $check = getimagesize($_FILES['blog_image']['tmp_name']);
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
                        move_uploaded_file($_FILES['blog_image']['tmp_name'], $imageUrl);
                        $sql = "INSERT INTO blogs(category_id, blog_title, short_description, long_description, blog_image, publication_status) VALUES ('$data[category_id]', '$data[blog_title]', '$data[short_description]', '$data[long_description]', '$imageUrl', '$data[publication_status]')";
                        $link = Database::dbConnection();


                        if(mysqli_query($link, $sql)){
                            $message = 'Blog save successfully';
                            return $message;
                        }else{
                            die('Query problem'.mysqli_error(Database::dbConnection()));
                        }

                    }
                }
            }

        }else{
            die('Please select a valid image file. Thanks..!!');
        }




//        $sql = "INSERT INTO blogs(category_id, blog_title, short_description, 	long_description, 	publication_status) VALUES ('$data[category_id]', '$data[blog_title]', '$data[short_description]', '$data[long_description]', '$data[publication_status]')";
//        $link = Database::dbConnection();
//
//
//        if(mysqli_query($link, $sql)){
//            $message = 'Blog save successfully';
//            return $message;
//        }else{
//            die('Query problem'.mysqli_error(Database::dbConnection()));
//        }
    }



}