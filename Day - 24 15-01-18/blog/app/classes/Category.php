<?php
namespace App\classes;

use App\classes\Database;
class Category
{
    public function addCategory($data){
        $sql = "INSERT INTO categories(category_name, category_description, publication_status) VALUES ('$data[category_name]', '$data[category_description]', '$data[publication_status]')";
        $link = Database::dbConnection();

        if(mysqli_query($link, $sql)){
            $message = 'Category save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function manageCategory(){
        $sql = "SELECT * FROM categories";
        $link = Database::dbConnection();

        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }



    public function editCategory($id){
        $link = Database::dbConnection();
        $sql = "SELECT * FROM categories WHERE id = $id";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }



    public function updateCategoryInfo($data){
        $link = Database::dbConnection();
        $sql = "UPDATE categories SET category_name = '$data[category_name]', category_description = '$data[category_description]', publication_status='$data[publication_status]' WHERE  id= '$data[id]'";
        if (mysqli_query($link, $sql)) {
            header('location: manage-category.php');
        } else {
            die('Query problem' . mysqli_error($link));
        }

    }


    public function deleteCategory($id){
        $link = Database::dbConnection();
        $sql = "DELETE FROM categories WHERE id = '$id'";
        if (mysqli_query($link, $sql)){
            header('location: manage-category.php');
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }




    public function allPublishedCategoryInfo(){
        $sql = "SELECT * FROM categories WHERE publication_status = 1";
        $link = Database::dbConnection();
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }


}