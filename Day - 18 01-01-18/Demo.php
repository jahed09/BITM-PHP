<?php

namespace App\classes;
require_once 'Example.php';
class Demo extends Example
{
    public $mobile = '01715121514';
    protected $district = 'Sagordi';
    private $division = 'Barisal';

    public function newOne(){
        echo 'In function new one';
//        $this-> one();
    }
    protected function newTwo(){
        echo 'In function New Two';
    }
    private function newThree(){
        echo 'In function New Three';
    }
}