<?php
// pHP te 4 dhoroner error aste pare Notice, Parse, Fatal
//    $data = [];
//
//    $data[0] = 10;
//    $data[1] = 20;
//    $data[2] = 30;
//    $data[3] = 40;
//    $data[4] = 50;
//    $data[5] = 60;
//    $data[6] = 70;
//
//    $data['name'] = 'Jahed Hassan';
//    $data['city'] = 'Dhaka';
//    $data['country'] = 'Bangladesh';

//        $data = [10,20,30,40,50,60,70,'Jahed Hassan','Dhaka','Bangladesh'];

//    foreach ($data as $q){
//        echo $q;
//    }


//BUT AMRA ARRAY DECLEAR KORBO AI VABE
    $data = [
        'name' => 'Jahed Hassan',
        'city' => 'Dhaka',
        'country' => 'Bangladesh',
        'mobile' => '01719267372',
    ];

    echo '<pre>';
//    print_r($data);
    var_dump($data);
    ?>
<hr/>
<?php
//ARRAY HOLO TIN PROKAR
//    1. NUMERIC ARRAY; JOKON ARRAY AR INDEX HOI NUMBER;
//    2. ASSOCIATIVE ARRAY; JOKHON ARRAY AR INDEX HOI STRING;
//    3. MULTIDIMENSIONAL ARRAY; JOKON ARRAY AR INDEX HOBE AKER ODHIK; ATAKE SADHARONTO TABLE AR SATHE COMPARE KORA HOI;

    $data = [];

    $data[0][0] = 10;
    $data[0][1] = 20;
    $data[0][2] = 30;

    $data[1][0] = 40;
    $data[1][1] = 50;
    $data[1][2] = 60;

    $data[2][0] = 70;
    $data[2][1] = 80;
    $data[2][2] = 90;

    $data[3][0] = 100;
    $data[3][1] = 110;
    $data[3][2] = 120;

//        echo $data[0][2];

    foreach ($data as $datum){
//        echo $datum[0].' '.$datum[1].' '.$datum[2].'<br/>';
        foreach ($datum as $p) {
            echo $p.' ';
        }
        echo '<br/>';
    }
    ?>
<hr/>
<!-- ----------------------------------------------FUNCTION-------------------------------------------------------------->

<?php
    function demo ($firstName, $lastName) {
//        echo 'hello World';
//        $firstName = 'Robin';
//        $lastName = 'Kumar';
        $fullName = $firstName. ' '. $lastName;
//        echo $fullName;
        return $fullName;
    }

    echo demo('Jahed', 'Khan');

    echo '<br/>................<br/>';
    $res = demo('Karim', 'Box');
    echo $res;

    echo '<br/>................<br/>';
    $q = demo('Rahim', 'Box');
    echo 'Full Name is: '.$q;

    echo '<br/>................<br/>';
?>
<hr/>

<!-- ------------------------------------------------PHP CLASS-------------------------------------------------------------->
<!--Object oriented programming ar akta syntax. ata holo programming language ar akta sonbidhan.-->
<!--
        OOP------------
        *Class
        *Object
        *Property
        *Method
        *Encapsalation
        *Inheritage
        *Abstract
        *Polyinorfhsm
        *Trait
        *Nawdper
-->
<?php

class DemoOne{
    public $name = "Shahin Alam";
    public $city = "Dhaka";
    public $country = "Bangladesh";

    function one() {
        echo 'in one';
    }

    function two(){
        echo 'in two';
    }

    function three (){
        echo 'in three';
    }
}
$demoOne = new DemoOne;
$demoOne -> one();
echo $demoOne->name;
//    -> ata holo php ar object sign
    ?>

