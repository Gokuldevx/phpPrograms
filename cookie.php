<!DOCTYPE html>

<?php
$cookie_name='User';
$cookie_value= 'Gokul';
?>

<html>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie ".$cookie_name." is set!<br>";
        echo "Value is ".$_COOKIE[$cookie_name]."<br>";
    }
    else{
        echo "Cookie named ".$cookie_name." is not set!<br>";
        setcookie($cookie_name,$cookie_value,time()+ 86400*30, '/');
    }

    setcookie("test_cookie", "test", time()+3600, '/');

    if(count($_COOKIE)>0){
        echo "Cookies are enabled<br>";
    }
    else{
        echo "Cookies are disabled<br>";
    }

    if(isset($_COOKIE[$cookie_name])){
        setcookie($cookie_name,"",time()-3600);
        echo "Cookie is deleted<br>";
    }
    ?>
</body>
</html>

