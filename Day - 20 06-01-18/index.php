<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;


    $message = '';
    if (isset($_POST['btn'])){
        $message = Student::saveStudentInfo($_POST);
    }


?>

<hr/>
    <a href="index.php">add Student</a> ||
    <a href="view-student.php"> View Student</a>
<hr/>
<h1><?php echo $message; ?></h1>
<form method="post" action="">
    <table>
        <tr>
            <th>Student Name</th>
            <td><input type="text" name="name" </td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input type="email" name="email"</td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="SubmiT" name="btn"> </td>
        </tr>
    </table>
</form>