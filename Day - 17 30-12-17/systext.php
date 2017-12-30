<?php

?>

<!--------------------------------------------------- PHP SYNTAX ------------------------------------------------------------>
<!--    *PHP can be written by two types-
        * 1. HTML in PHP
        * 2. PHP in HTML tags
-->
<?php
    echo '<html>';
        echo '<head>';
            echo '<title>';
                echo 'this is title';
            echo '</title>';
        echo '</head>';
        echo '<body>';
            echo '<h1> Here PHP in HTML tags</h1>';
            echo '<h2> This is Heading Two</h2>';
        echo '</body>';
    echo '</html>';
?>


<html>
    <head>
        <title><?php echo 'Home';?> </title>
    </head>
    <body>
        <h1><?php echo "Here PHP in HTML tags"?></h1>
        <p><?php echo 'this is a paragraph'?></p>
    <input type="text" value="<?php echo 'hallow World'?>"/>
    <br/>
    </body>
</html>


<!--  In them PHP in HTML syntax is easy and comfortable and mostly uses.
        The basic Syntax of PHP is <?php echo 'Home';?>
      where, <?// = Opening PHP tag,
//           echo = output string,
//         'Home' = string
//              ; = End of statement,
               ?> = Closing PHP tag
-->

<!--------------------------------------------------VARIABLE------------------------------------------------------------------- -->
<!--
        /*
            3 Major rules
                * Start with mejor sign
                *   a-z, A-Z, 0-9, _
                * No number in first

            3 standard rules
                *   small letter
                *   Meaning Full
                *   readable
             */

        */
-->
<?php
    $firstName = 'PHP Variable';
    $lastName = 'By, Jahed Hassan Khan';
    echo $firstName. ' ' . $lastName. '<br/>';
?>

<!-- ------------------------------------------------OPERATOR------------------------------------------------------------------------->
<!--
    /* Operator in php*/
    /* 4 major types of Operator in PHP
        *Arithmatic Operator
            *Binary (+, -, *, /, %)
            *Unary (++, --, -)
        *Assignment Operator
            =, +=, -=, *=, /=, %=, .=
        * Conditional Operator
            >, >=, <, <=, ==, !=, ===, !==
        * Logical Operator
            &&, ||, !
    */
-->
<html>
    <body>
        <hr/>
        <h1>Arithmetic Binary Operator</h1>
            <?php
                $x = 20;
                $y = 30;

                echo $x + $y; echo '<br/>';
                echo $x - $y; echo '<br/>';
                echo $y * $x; echo '<br/>';
                echo $y / $x; echo '<br/>';
                echo $y % $x; echo '<br/>';
            ?>

        <hr/>
        <h1>Aritmatic Unary Operator</h1>
            <?php
                $x = 20;
                $y = 30;

                echo ++$x; echo '<br/>';
                echo $x++; echo '<br/>';
                echo --$x; echo '<br/>';
                echo $x--; echo '<br/>';
            ?>
        <hr/>
        <h1>Assignment Operator</h1>
            <?php
                $x = 20;
                $y = 30;

                echo $x = $y; echo '<br/>';   // 30
                echo $x += $y; echo '<br/>'; // 60
                echo $x -= $y; echo '<br/>'; //30
                echo $x *= $y; echo '<br/>'; //900
                echo $x /= $y; echo '<br/>'; // 30
                echo $x %= $y; echo '<br/>'; // 0
                echo $x .= $y; echo '<br/>'; //030
            ?>
        <hr/>
        <h1>Conditional Operator</h1>
            <?php
                $x = 20;
                $y = 20;

                echo ($x > $y); echo '<br/>';
                echo ($x == $y); echo '<br/>';
                echo ($x >= $y); echo '<br/>';
                echo ($x <= $y); echo '<br/>';
                echo ($x != $y); echo '<br/>';
                echo ($x === $y); echo '<br/>';
                echo ($x !== $y); echo '<br/>';
                var_dump ($x > $y); echo '<br/>';
                var_dump ($x == $y); echo '<br/>';
                var_dump ($x >= $y); echo '<br/>';
                var_dump ($x <= $y); echo '<br/>';
                var_dump ($x != $y); echo '<br/>';
                var_dump ($x === $y); echo '<br/>';
                var_dump ($x !== $y); echo '<br/>';
            ?>
        <hr/>
        <h1>
            Logical Operator
        </h1>
        <?php
            $x = 100;
            $y = 50;

            if ($x == 100 && $y == 50) {
            echo "Hello world!";
        };
        if ($x == 100 || $y == 50) {
            echo "Hello world!";
        };
        ?>

    </body>
</html>
<!-- --------------------------------------------STATEMENT------------------------------------------------------------------------------>
<!--
        *Generally statement three types
            *Single Line
            *Conditional
                *If
                *If Else
                *If Else if
                *switch
            * Repeated
                *For
                *While
                *Do While
                *Foreach
-->
<html>

    <body>
        <hr/>
        <h1>Single Line Statement</h1>
        <?php
            $x = 20;
            echo ($x);
        ?>
        <hr/>
        <h1>Conditional Statement</h1>
        <?php
            $x = 20;
            $y = 30;
            $z = 40;
            if ($x>=20){
                echo ('This is conditional PHP');
            }
        ?>
        <br/>
        <?php
            $x = 20;
            $y = 30;
            $z = 40;
            if ($x>20) {
                echo ('this is true');
            } else {
                echo ('This is false');
            }
        ?>
        <br/>
        <?php
            $x = 20;
            $y = 30;
            $z = 40;
            if ($x>20) {
                echo ('this is true');
            } elseif ($y>20) {
                echo ('This is true');
            } elseif ($z>20){
                echo ('This is true');
            }else {
                echo ('this is false');
            }
        ?>
        <br/>
        <?php
        $x = "20";

        switch ($x) {
            case "10":
                echo "Your favorite color is red!";
                break;
            case "20":
                echo "Your favorite color is blue!";
                break;
            case "30":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
<hr/>
    <h1>
        Repeated Statement
    </h1>
        <?php
        $x = 1;

        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);

        echo ('<br/>');
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        };
        ?>





<?php
        $data = 100;
        $data = [10, 20, 30, 'sojib', 'Dhaka', 'Bangladesh'];

        $data[0] = 10;
        $data[1] = 20;
        $data[2] = 30;

        $data['name'] = 'Sojib khan';
        $data['city'] = 'Dhaka';
        $data['country'] = 'Bangladesh';
        echo $data[2];
        foreach ($data as $s) {
            echo $s.' ';
        }
//
//        $data = [
//          'name' => 'Sojib Khan',
//          'city' => 'Dhaka',
//          'country' => 'Banglaedesh',
//          'mobile' => '01715451215'
//        ];
//
//        echo '<pre>';
//print_r($data);
//var_dump($data);

?>




    </body>
</html>