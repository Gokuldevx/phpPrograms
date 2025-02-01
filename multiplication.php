<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <input type="text" name="mul" placeholder="Enter the number for multiplication"><br/><br/>
        <input type="submit" name="submit" value="Find Multiplication"> <br/><br/>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['mul'];
        for($i=1;$i<=10;$i++){
            echo $num."x".$i."=".($num*$i)."<br/>";
        }
    }
    ?>
</body>
</html>