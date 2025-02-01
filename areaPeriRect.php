<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <input type="text" name="len" placeholder="Enter length"><br/><br/>
        <input type="text" name="wid" placeholder="Enter width"><br/><br/>
        <input type="submit" name="submit" value="Find Area & Perimeter"><br/><br/>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $length=$_POST['len'];
        $width=$_POST['wid'];
        $area=$length*$width;
        $perimeter=2*($length+$width);
        echo "The area of rectangle is ".$area."<br/>";
        echo "The Perimeter of rectangle is ".$perimeter;
    }
    ?>
</body>
</html>