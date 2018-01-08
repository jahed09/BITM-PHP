<?php

namespace App\classes;


class Student
{
    public function saveStudentInfo ($data){
        $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan');//connection string//
        $sql = "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
        if (mysqli_query($link, $sql)){
            $message = 'Data save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan');//connection string//
        $sql = "SELECT * FROM students";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
//            echo '<pre>';
//            print_r($queryResult);

            return $queryResult;

        }else{
            die('Query problem'.mysqli_error($link));
        }
    }


    public function getStudentInfoById($id){
        $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan');//connection string//
        $sql = "SELECT * FROM students WHERE id = '$id' ";

        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query problem' . mysqli_error($link));
        }

    }

    public function updateStudentInfo ($data){
        $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan');//connection string//
//        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile='$data[mobile]' WHERE  id= '$id'";
        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile='$data[mobile]' WHERE  id= '$data[id]'";
        if (mysqli_query($link, $sql)) {
            header('location: view-student.php');
        } else {
            die('Query problem' . mysqli_error($link));
        }
    }

    public function deleteStudentInfoById ($id){
        $link = mysqli_connect('localhost', 'root', '', 'jahed-hassan');//connection string//
//        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile='$data[mobile]' WHERE  id= '$id'";
        $sql = "DELETE FROM students WHERE id = '$id'";
        if (mysqli_query($link, $sql)){
            header('location: view-student.php');
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }


}