<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/10/2018
 * Time: 6:17 PM
 */

namespace App\classes;


class Product
{
    public function getProductInfo($data){
        $link = mysqli_connect('localhost', 'root', '', 'products');
        $sql = "INSERT INTO products (category_name, product_name, product_description, status) VALUES ('$data[category_name]', '$data[product_name]', '$data[product_description]', '$data[status]')";
        if (mysqli_query($link, $sql)){
            $message = 'Data save successfully';
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function viewProductInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'products');
        $sql = "SELECT * FROM products";
        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getProductInfoById($id){
        $link = mysqli_connect('localhost', 'root', '', 'products');
        $sql = "SELECT * FROM products WHERE id = '$id' ";
        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query problem' . mysqli_error($link));
        }
    }

}