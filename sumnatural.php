<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <input type="text" name="limit" placeholder="Enter Limit"><br/><br/>
        <input type="submit" name="submit" value="Find Sum"><br/><br/>
    </form>
    
    <?php
    if(isset($_POST['submit'])){
        $lim=$_POST['limit'];
        $sum=0;
        for($i=1;$i<=$lim;$i++){
            $sum=$sum+$i;
        }
        echo "The Sum is ".$sum;
    }
    ?>
</body>
</html>