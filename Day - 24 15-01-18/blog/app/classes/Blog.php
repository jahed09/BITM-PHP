<?php
namespace App\classes;

use App\classes\Database;
class Blog
{
    public function addBlogInfo($data){
        $sql = "INSERT INTO blogs(catergory_id, blog_title, short_description, 	long_description, 	publication_status) VALUES ('$data[catergory_id]', '$data[blog_title]', '$data[short_description]', '$data[long_description]', '$data[publication_status]')";
        $link = Database::dbConnection();
        if(mysqli_query($link, $sql)){
            $message = 'Blog save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }


    }
}