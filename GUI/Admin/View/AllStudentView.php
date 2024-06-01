<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../../BLL/adminBLL.php';

?>
<style>
.studentTable {
    width: 100%;
    height: 100%;
    border-collapse: collapse;
}

.studentTable th {
    text-align: left;
    background-color: black;
    color: white;
}

.studentTable tr {
    height: 40px;
    border-top: 1px solid black;
    
}

tr:not(:last-child) td{
  border-bottom: 1px solid gray;
}

#nav {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    padding-bottom: 15px;
}

#nav .title {
    font-size: 30px;
    font-weight: bold;
    padding-left: 30px;
}
</style>
<body>
    <div id="nav">
        <i class='bx bx-arrow-back bx-md'></i>
        <p class="title">Students</p>
    </div>
    <div class="main">
        <table class="studentTable">
            <tr>
                <th style="text-align: center">StudentID</th>
                <th>Student's name</th>
                <th>Student's email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Birthday</th>
                <th>Action</th>
            </tr>
            <?php
                $students = AdminBLL::allStudent();
                foreach ($students as $student) {
                    echo '
                    <tr>
                        <td style="text-align: center">'.$student->getID().'</td>
                        <td>'.AdminBLL::getStudentName($student->getID()).'</td>
                        <td>'.AdminBLL::getStudentEmail($student->getID()).'</td>
                        <td>'.$student->getGender().'</td>
                        <td>'.$student->getAddress().'</td>
                        <td>'.$student->getPhoneNumber().'</td>
                        <td>'.$student->getBirthDay().'</td>
                        <td>
                            <form action="DetailStudentView.php" method="get">
                            <input  type="hidden"
                                    name="id"
                                    value="'.$student->getID().'">

                            <button type="submit">
                                <i class="bx bxs-edit-alt bx-sm" style="color: blue;" ></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    ';
                }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
<script>
    var element = document.getElementById("nav"); //grab the element
    element.onclick = function() {
        window.location.href = "../adminUI.php";
    }
</script>
</html>