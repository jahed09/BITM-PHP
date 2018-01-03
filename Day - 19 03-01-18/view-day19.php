<?php

    require_once 'vendor/autoload.php';
    use App\classes\Example;
    use App\classes\Demo;
    Demo::add();
    $result ="";
    if(isset($_POST['btn'])){
//    $example = new App\classes\Example();
//        $result = $example->makeSeriesNumber($_POST);

        $result =Example::makeSeriesNumber($_POST);
    }
?>


<form method="post" action="">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number" </td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <th>result</th>
            <td><textarea rows="5" col="30"><?php echo $result; ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>