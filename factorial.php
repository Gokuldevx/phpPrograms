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
        $fact = 1;
        for ($i = 1; $i <= $num; $i++) {
            $fact = $fact * $i;
        }
        echo "The factorial is " . $fact;

    }
    ?>
</body>

</html>