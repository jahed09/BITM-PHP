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
}