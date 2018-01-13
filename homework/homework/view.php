<?php
    //require_once 'app/classes/Example.php';
    require_once 'vendor/autoload.php';
    use App\classes\Example;
    use App\classes\Demo;

    Demo::add();
    $result='';
    if(isset($_POST['btn'])){
//        $example = new App\classes\Example();
//        $result = $example->makeSeriesNumber($_POST);
        $result = Example::makeSeriesNumber($_POST);
    }
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number"></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd">Odd
                <input type="radio" name="choice" value="even">Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="30"><?php echo $result; ?></textarea> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>