<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter number">
        <input type="submit" name="submit" value="Find Factorial">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        class Factorial {
            function factorial($num){
                $fact = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $fact = $fact * $i;
                }
                return $fact;
            }
        }
        
        $obj = new Factorial();
        $result = $obj->factorial($num);
        echo "The factorial is ".$result;
        
        
    }
    ?>
</body>
</html>