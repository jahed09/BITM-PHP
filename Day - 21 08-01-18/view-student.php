<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    if (isset($_GET['delete'])){
        $id = $_GET['id'];
        Student::deleteStudentInfoById($id);
    }










    $queryResult = Student::getAllStudentInfo();

//
//    while ($student = mysqli_fetch_assoc($queryResult)){
//        echo "<pre>";
//        print_r($student);
//    }




?>



<hr/>
    <a href="index.php">Add Student</a> ||
    <a href="view-student.php"> View Student</a>
<hr/>

<table border="1" width="600">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php
        $i = 1;
    while ($student = mysqli_fetch_assoc($queryResult)){ ?>

    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['email'] ?></td>
        <td><?php echo $student['mobile'] ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']?>">Edit</a> ||
            <a href="?delete=true&id=<?php echo $student['id']?>" onclick="return confirm('Are you sur to delete this !!!')">Delete</a>
        </td>
    </tr>


    <?php } ?>

</table>
