<!DOCTYPE html>
<html>
<body>
    <?php
    session_start();

    $_SESSION['favcolor']='red';
    $_SESSION['favanimal']= 'dog';
    echo "Session variables are set<br>";

    if(isset($_SESSION["favcolor"]) && isset($_SESSION['favanimal'])){
        echo "Fav color is ".$_SESSION['favcolor']."<br>";
        echo "Fav Animal is ".$_SESSION['favanimal']."<br>";
    }

    $_SESSION['favcolor']='pink';
    echo "Updated Fav color is ".$_SESSION['favcolor']."<br>";
    print_r($_SESSION);

    session_unset();
    session_destroy();
    ?>
</body>
</html>