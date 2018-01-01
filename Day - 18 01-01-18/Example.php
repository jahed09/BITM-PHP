<?php
namespace App\classes;
class Example
{
    public $name = 'Kamal Khan';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';

    public function one() {
        echo 'In One';
    }
    protected function two() {
        echo 'In two';
    }
    private function three() {
        echo 'In three';
    }
}