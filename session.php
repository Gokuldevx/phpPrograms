<!DOCTYPE html>
<html>
<body>
    <?php
    //Start session
    session_start();

    //Set session variables
    $_SESSION['favcolor']='red';
    $_SESSION['favanimal']= 'dog';
    

    if(isset($_SESSION["favcolor"]) && isset($_SESSION['favanimal'])){
        echo "Session variables are set<br>";
        echo "Fav color is ".$_SESSION['favcolor']."<br>";
        echo "Fav Animal is ".$_SESSION['favanimal']."<br>";
    }
    else{
        echo "Sesion variables is not set<br>";
    }
    
    //Modify session
    $_SESSION['favcolor']='pink';
    echo "Updated Fav color is ".$_SESSION['favcolor']."<br>";
    print_r($_SESSION);

    //Destroy session
    session_unset();
    session_destroy();
    ?>
</body>
</html>