<?php
namespace App\classes;
class Example
{
    public function makeSeriesNumber($data){
//        echo '<pre>';
//        print_r($data);

        $startingNumber = $data['starting_number'];
        $endingNumber = $data['ending_number'];
        $choice = $data['choice'];

        $res='';
//        for($i=$startingNumber; $i<=$endingNumber; $i++){
//            $res .= $i.' ';
//        }
        for ($i=$startingNumber; $i<=$endingNumber; $i++){
            if ($choice=='odd'){
                if ($i%2 !=0){
                    $res .=$i.' ';
                }
            }else if ($choice=='even'){
                if ($i%2 ==0) {
                    $res .= $i.' ';
                }
            }
        }

        return $res;
    }
}