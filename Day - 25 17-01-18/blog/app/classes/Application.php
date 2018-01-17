<?php

namespace App\classes;

use App\classes\Database;
class Application
{
    public function getAllPublishedInfo(){
        $link = Database::dbConnection();
        $sql = "SELECT * FROM blogs WHERE publication_status = 1 ";

        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error());
        }

    }
}