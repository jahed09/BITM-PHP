<?php
require_once 'FullName.php';
use app\classes\FullName;
//    echo '<pre>';
//    print_r($_POST);
//    echo $_POST['first_name'].' '['last_name'];
//

//$name = 'hasim Amla';
    if( isset($_POST['btn'])){
//        $fullName = new App\classes\FullName();
//        $result = $fullName->makeFullName($_POST);
        $result = FullName::makeFullName($_POST);
    }

?>
<form method="post" action="">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name"/></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"/> </td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="<?php echo $result ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"/> </td>
        </tr>
    </table>
</form>
