<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <input type="text" name="n1" placeholder="Enter num1"><br/><br/>
        <input type="text" name="n2" placeholder="Enter num2"><br/><br/>
        <input type="text" name="n3" placeholder="Enter num3"><br/><br/>
        <input type="submit" name="submit" value="Find Average"><br/><br/>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $avg=($n1+$n2+$n3)/3;
        echo "The average is ".$avg;
    }
    ?>
</body>
</html>