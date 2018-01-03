<?php
namespace App\classes;
class Example
{
    public function makeSeriesNumber ($data){
//        echo '<pre>';
//        print_r($data);
        $startingNumber = $data['starting_number'];
        $endingNumber = $data['ending_number'];
        $res = '';
        for ($i=$startingNumber; $i<=$endingNumber; $i++){
            $res .= $i.' ';
        }
        return $res;
    }
}

/*
    Importent lins.....
        * https://getcomposer.org/;
 *      * https://packagist.org/;
*/