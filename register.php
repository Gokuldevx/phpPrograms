<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <table >
            <tr>
                <td colspan="2" align="center">Student Registration</td></tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Enter Name" required></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" placeholder="Enter Age" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter email" required></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><select name="course">
                    <option value="BCA">BCA</option>
                    <option value="Bsc CS">Bsc CS</option>
                    <option value="Bsc Electronics">Bsc Electronics</option>
                    <option value="BCom Tax">BCom Tax</option>
                    <option value="BCom Finance">BCom Finance</option>
                    <option value="BBA">BBA</option>
                </select></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><select name="semester">
                    <option value="Semester1">Semester 1</option>
                    <option value="Semester2">Semester 2</option>
                    <option value="Semester3">Semester 3</option>
                    <option value="Semester4">Semester 4</option>
                    <option value="Semester5">Semester 5</option>
                    <option value="Semester6">Semester 6</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>


    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $course=$_POST['course'];
        $semester=$_POST['semester'];

        echo "Name : $name<br>";
        echo "Age : $age<br>";
        echo "Email : $email<br>";
        echo "Course : $course<br>";
        echo "Semester : $semester<br>";
    }
    ?>
</body>
</html>