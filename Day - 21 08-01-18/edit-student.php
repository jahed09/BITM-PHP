<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;


    $id = $_GET['id'];
$queryResult = Student::getStudentInfoById($id);
$student = mysqli_fetch_assoc($queryResult);

    echo "<pre>";
    print_r($student);




    $message = '';
    if (isset($_POST['btn'])){
        $message = Student::updateStudentInfo($_POST);
    }


?>

<hr/>
<a href="index.php">Add Student</a> ||
<a href="view-student.php"> View Student</a>
<hr/>
<h1><?php echo $message; ?></h1>
<form method="post" action="">
    <table>
        <tr>
            <th>Student Name</th>
            <td>
                <input type="text" name="name" value="<?php echo $student['name']; ?>">
                <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            </td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input type="email" name="email" value="<?php echo $student['email']; ?>"</td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $student['mobile']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="UpdatE" name="btn"> </td>
        </tr>
    </table>
</form>